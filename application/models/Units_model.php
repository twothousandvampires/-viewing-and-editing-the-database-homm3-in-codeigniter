<?


class Units_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_all_units($id = FALSE){

        if($id === FALSE){
            $query = $this->db->get('units');
            return $query->result_array();
        }

        $query = $this->db->get_where('units' , array('id' => $id));
        return $query->row_array();
    }

    public function delete($id){
        $this->db->delete('units', array('id' => $id)); 
    }

    public function update($id, $arr){
        $this->db->where('id', $id);
        $this->db->update('units', $arr);
    }
}