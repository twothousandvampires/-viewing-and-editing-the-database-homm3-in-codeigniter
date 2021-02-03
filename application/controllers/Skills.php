<?

defined("BASEPATH") OR exit('No direct script allowed');

class Skills extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        $this->load->model('skills_model');

    }

    public function index(){

        $data['skills'] = $this->skills_model->get_all_skills();

        $this->load->view('templates/header', $data);
        $this->load->view('skills/index' , $data);
        $this->load->view('templates/footer' , $data);
    }

    public function view($id = NULL){
        $data['item'] = $this->skills_model->get_all_skills($id);
        if(empty($data['item'])){
            show_404();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('skills/view' , $data);
        $this->load->view('templates/footer' , $data);
    }

    public function delete($id){
        $this->skills_model->delete($id); 
        header("Location: ../index");
        exit();
    }

    public function edit($id){

        $data['item'] = $this->skills_model->get_all_skills($id);

        if(empty($data['item'])){
            show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('skills/edit' , $data);
        $this->load->view('templates/footer' , $data);
    }  

    public function update($id){

     
        $data = array(
            'name' => $this->input->post('name'),
            'without' => $this->input->post('without'),
            'base' => $this->input->post('base'),
            'advanced' => $this->input->post('advanced'),
            'expert' => $this->input->post('expert'),
        );
    
        $this->skills_model->update($id, $data);
        header("Location: ../index");
    }
}