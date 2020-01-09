<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');  
	// application/controllers/Produits.php
	 
	class Produits extends CI_Controller
	{
		 
		   	
		public function liste()
		{
		    // Charge la librairie 'database'
		    $this->load->database();
		 
		    // Exécute la requête 
		    $results = $this->db->query("SELECT * FROM produits");  
		 
		    // Récupération des résultats    
		    $aListe = $results->result();   
		 
		    // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
		    $aView["liste_produits"] = $aListe;

		    
		 
		    // Appel de la vue avec transmission du tableau  
		    $this->load->view('liste', $aView);
		}


		public function ajout()
		{	
				//chargement des librairie 
				$this->load->library('form_validation',"upload");
				//indique que l'on travaille un formulaire a code igniter
				$this->load->helper('form');
				//premet de charger la base de donnée pour les categorie
				$this->load->database();
				$results = $this->db->query("SELECT * FROM categories");
				$this->db->order_by("cat_nom","ASC");
				$vue_cat["categorie"]= $results->result();
				//fin categorie

			   if ($this->input->post()) { 
			   	// verification dajout a la base de donnée.
			        
			        $this->form_validation->set_rules('pro_ref', 'reference', 'trim|required|alpha_numeric');
					$this->form_validation->set_rules('pro_libelle', 'libelle', 'trim|required|alpha');
					$this->form_validation->set_rules('pro_prix', 'prix', 'trim|required|numeric');
					$this->form_validation->set_rules('pro_stock', 'quantite', 'trim|required|numeric');
					$this->form_validation->set_rules('pro_couleur', 'couleur', 'trim|required|alpha');
					$this->form_validation->set_rules('pro_cat_id', 'cat_id', 'required');
					$this->form_validation->set_rules('pro_bloque', 'oui_ou_non', 'required');
			 		

					//condition si tous et valide ou non 
			        if ($this->form_validation->run() == FALSE)
			                {
			                        $this->load->view('ajout',$vue_cat);
			                }
			                else
			                {

				                	//envoie de donné dans la base de donné
				                $data = $this->input->post();
				                unset($data["envoyer"]);
				                unset($data["annuler"]);
				                unset($data["fichier"]);
				        		
				        		if ($_FILES) 
							        {
							            // On extrait l'extension du nom du fichier 
							            // Dans $_FILES["pro_photo"], pro_photo est la valeur donnée à l'attribut name du champ de type 'file'  
							            $extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1);
							            $data["pro_photo"]=$extension;
							        }
							        $this->db->insert('produits', $data);

							        $id= $this->db->Insert_Id();//recuperation du nouvelle id
							        /*
							         * On a l'extension du fichier donc on peut enregistrer
							         * en base de données 
							         */
							 
							         /*
							         * Pour créer le nom du fichier : il faut récupérer la clé primaire (pro_id) : 
							         * - dans le cas du formulaire d'ajout : il faut récupérer avec la méthode $this-db->InsertId();
							         * - dans le cas du formulaire de modification : on récupère le pro_id passé dans un champ de type hidden     
							         */
							 
							         // On créé un tableau de configuration pour l'upload
							         $config['upload_path'] = './assets/image/'; // chemin où sera stocké le fichier
							 
							         // nom du fichier final
							         $config['file_name'] = $id.'.'.$extension; 
							 
							         // On indique les types autorisés (ici pour des images)
							         $config['allowed_types'] = 'gif|jpg|jpeg|png'; 
							 
							         // On charge la librairie 'upload'
							         $this->load->library('upload');
							 
							         // On initialise la config 
							         $this->upload->initialize($config);
				        		//redirection 
				                 
						         // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
						         if ( ! $this->upload->do_upload('fichier')) 
						         {
									// Echec : on récupère les erreurs dans une variable (une chaîne)
								     $errors = $this->upload->display_errors();    
								 
								     // on réaffiche la vue du formulaire en passant les erreurs 
								     $aView["errors"] = $errors;
 
						            // Echec,  on réaffiche le formulaire
						            $this->load->view('ajout',$vue_cat,$aView);
						         }
						         else
						         { // Succès, on redirige sur la liste 
						             redirect('produits/liste');
						         }

			   				} 
			   }else 
			   { //  appel de la page: affichage du formulaire
			      $this->load->view('ajout',$vue_cat);
			   }
		}


		public function modif($id)
		{
			//chargement des librairie 
			$this->load->library('form_validation',"upload");
			$this->load->helper('url');
		    $this->load->database();
		    if ($this->input->post())
		    {
		    	$this->form_validation->set_rules('pro_ref', 'reference', 'trim|required|alpha_numeric');
				$this->form_validation->set_rules('pro_libelle', 'libelle', 'trim|required|alpha');
				$this->form_validation->set_rules('pro_prix', 'prix', 'trim|required|numeric');
				$this->form_validation->set_rules('pro_stock', 'quantite', 'trim|required|numeric');
				$this->form_validation->set_rules('pro_couleur', 'couleur', 'trim|required|alpha');
				$this->form_validation->set_rules('pro_cat_id', 'cat_id', 'required');
				//$this->form_validation->set_rules('pro_bloque', 'oui_ou_non', 'required');
				 	//condition si tous et valide ou non 
				       			 if ($this->form_validation->run() == FALSE)
				                {
				                	echo "erreur validation";
				                    $liste = $this->db->query("SELECT * FROM produits JOIN categories on pro_cat_id = cat_id WHERE pro_id= ?", $id);
 									$model["produits"] = $liste->row(); // première ligne du résultat
		   							$this->load->view('modif', $model);
				                }
				                else
				                {

					                	//envoie de donné dans la base de donné
					                $data = $this->input->post();
			
					                unset($data["fichier"]);
					                // On récupère
							        $id = $this->input->post("id");
							 
							        $this->db->where('pro_id', $id);
							        $this->db->update('produits', $data);
							 
							        redirect('produits/liste');
					        		
					        		if ($_FILES) 
								        {
								            // On extrait l'extension du nom du fichier 
								            // Dans $_FILES["pro_photo"], pro_photo est la valeur donnée à l'attribut name du champ de type 'file'  
								            $extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1);
								            $data["pro_photo"]=$extension;
								        }
								        $this->db->insert('produits', $data);

								        $id= $this->db->Insert_Id();//recuperation du nouvelle id
								        /*
								         * On a l'extension du fichier donc on peut enregistrer
								         * en base de données 
								         */
								 
								         /*
								         * Pour créer le nom du fichier : il faut récupérer la clé primaire (pro_id) : 
								         * - dans le cas du formulaire d'ajout : il faut récupérer avec la méthode $this-db->InsertId();
								         * - dans le cas du formulaire de modification : on récupère le pro_id passé dans un champ de type hidden     
								         */
								 
								         // On créé un tableau de configuration pour l'upload
								         $config['upload_path'] = './assets/image/'; // chemin où sera stocké le fichier
								 
								         // nom du fichier final
								         $config['file_name'] = $id.'.'.$extension; 
								 
								         // On indique les types autorisés (ici pour des images)
								         $config['allowed_types'] = 'gif|jpg|jpeg|png'; 
								 
								         // On charge la librairie 'upload'
								         $this->load->library('upload');
								 
								         // On initialise la config 
								         $this->upload->initialize($config);
					        		//redirection 
					                 
							         // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
							         if ( ! $this->upload->do_upload('fichier')) 
							         {
										// Echec : on récupère les erreurs dans une variable (une chaîne)
									     $errors = $this->upload->display_errors();    
									 
									     // on réaffiche la vue du formulaire en passant les erreurs 
									     $aView["errors"] = $errors;
	 
							            // Echec,  on réaffiche le formulaire
							            $this->load->view('ajout',$vue_cat,$aView);
							         }
							         else
							         { // Succès, on redirige sur la liste 
							             redirect('produits/liste');
							         }

				   				} 
		    }
	    else
	    {
		    $liste = $this->db->query("SELECT * FROM produits JOIN categories on pro_cat_id = cat_id WHERE pro_id= ?", $id);
		     // Teste s'il y a un résultat à la requête effectué : 
		        if ( ! $liste->row()) 
		        {
		            echo"<p>L'id ".$id." n'existe pas dans la base de données.</p>";    
		            exit;             
		        }
		    $model["produits"] = $liste->row(); // première ligne du résultat
		    $this->load->view('modif', $model);
		}

		}
		
	}

?>