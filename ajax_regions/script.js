$(document).ready(function() 
{
	$("#regions").change(function() 
	{	
	    // On récupère la valeur cliquée dans le <select> 'regions' (value du <select>)
		var region_id = $(this).val();				
		
		
		$.post({
			url: "post_json.php", // url du fichier PHP qui va exécuter la requête SQL 
			data: { id: region_id }, // passe le paramètre 'id' au fichier PHP, qui va valoir la région cliquée 
			dataType: "json", // on indique que le 
			success: function(toto) // la variable 'toto' reçoit le json retourné par PHP (via json_encode) 
			{			
				var contenu = ''; // on créé une chaîne vide nommée 'contenu'
				
				// 'each' est une boucle (équivalent d'un foreach en PHP)
				// lit ligne par ligne le JSON (une ligne = variable val)
				$.each(toto, function(key, val) 
				{		
                    // on contruit pour chqe ligne le HTML d'un <option> du <select> 
                    // avec les valeurs d ela ligne JSON					
		            contenu += "<option value='"+val.dep_id+"'>"+val.dep_id+" - "+val.dep_nom+"</option>\n";
		                  
		        });			
					
                // une fois le JSON lu, on met à jour le HTML du <select> 'departements' avec les <option>
                // construites pas le $.each 				
				$("#departements").html(contenu);
			},			
		});		
	});		
});