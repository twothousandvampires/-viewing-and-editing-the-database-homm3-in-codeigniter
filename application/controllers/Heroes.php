<?

defined("BASEPATH") OR exit('No direct script allowed');

class Heroes extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('heroes_model');

    }

    public function index(){

        $data['heroes'] = $this->heroes_model->get_all_heroes();

        $this->load->view('templates/header', $data);
        $this->load->view('heroes/index' , $data);
        $this->load->view('templates/footer' , $data);
    }

    public function view($id = NULL){
        $data['item'] = $this->heroes_model->get_all_heroes($id);
        if(empty($data['item'])){
            show_404();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('heroes/view' , $data);
        $this->load->view('templates/footer' , $data);
    }

    public function delete($id){
        $this->heroes_model->delete($id); 
        header("Location: ../index");
        exit();
    }

    public function edit($id){

        $data['item'] = $this->heroes_model->get_all_heroes($id);

        if(empty($data['item'])){
            show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('heroes/edit' , $data);
        $this->load->view('templates/footer' , $data);
    }  

    public function update($id){

        $data = array(
            'name' => $this->input->post('name'),
            'class' => $this->input->post('class'),
            'race' => $this->input->post('race'),
            'bio' => $this->input->post('bio'),
        );
    
        $this->heroes_model->update($id, $data);
        header("Location: ../index");
    }
}