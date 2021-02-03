<?


class Skills_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_all_skills($id = FALSE){

        if($id === FALSE){
            $query = $this->db->get('second_skills');
            return $query->result_array();
        }

        $query = $this->db->get_where('second_skills' , array('id' => $id));
        return $query->row_array();
    }

    public function delete($id){
        $this->db->delete('second_skills', array('id' => $id)); 
    }

    public function update($id, $arr){
        $this->db->where('id', $id);
        $this->db->update('second_skills', $arr);
    }
}