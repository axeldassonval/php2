    <?php
    class Disc extends CI_Controller
{
 
    public function add()
     {
        if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire
            $data = $this->input->post();
            $this->db->insert('disc', $data);
            redirect(site_url("disc/liste"));
        } 
        else 
        { // 1er appel de la page: affichage du formulaire
            $this->load->view('add');
        }
    }
}
    ?>