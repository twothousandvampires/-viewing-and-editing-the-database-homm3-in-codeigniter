<?


class Heroes_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_all_heroes($id = FALSE){

        if($id === FALSE){
            $query = $this->db->get('heroes');
            return $query->result_array();
        }

        $query = $this->db->get_where('heroes' , array('id' => $id));
        return $query->row_array();
    }

    public function delete($id){
        $this->db->delete('heroes', array('id' => $id)); 
    }

    public function update($id, $arr){
        $this->db->where('id', $id);
        $this->db->update('heroes', $arr);
    }
}