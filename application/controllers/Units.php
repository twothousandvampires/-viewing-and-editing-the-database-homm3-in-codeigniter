<?

defined("BASEPATH") OR exit('No direct script allowed');

class Units extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        $this->load->model('units_model');

    }

    public function index(){

        $data['units'] = $this->units_model->get_all_units();

        $this->load->view('templates/header', $data);
        $this->load->view('units/index' , $data);
        $this->load->view('templates/footer' , $data);
    }

    public function view($id = NULL){
        $data['item'] = $this->units_model->get_all_units($id);
        if(empty($data['item'])){
            show_404();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('units/view' , $data);
        $this->load->view('templates/footer' , $data);
    }

    public function delete($id){
        $this->units_model->delete($id); 
        header("Location: ../index");
        exit();
    }

    public function edit($id){

        $data['item'] = $this->units_model->get_all_units($id);

        if(empty($data['item'])){
            show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('units/edit' , $data);
        $this->load->view('templates/footer' , $data);
    }  

    public function update($id){

     
        $data = array(
            'name' => $this->input->post('name'),
            'fraction' => $this->input->post('fraction'),
            'min_damage' => $this->input->post('min_damage'),
            'max_damage' => $this->input->post('max_damage'),
            'attack' => $this->input->post('attack'),
            'defence' => $this->input->post('defence'),
            'hp' => $this->input->post('hp'),
            'speed' => $this->input->post('speed')
        );
    
        $this->units_model->update($id, $data);
        header("Location: ../index");
    }
}