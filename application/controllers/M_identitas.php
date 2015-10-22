<?php
/**
* 
*/
class M_identitas extends CI_Model
{
	
        public function __construct()
        {
                parent::__construct();
        }
        /**
        * @get_data_by_id untuk menampilkan data berdasarkan id
        * dengan 3 parameter (nama_tabel, nama_kolom_id, data id)
        * sama dengan perintah sql "SELECT * FROM TABLE WHERE <KOLOM PRIMARY KEY> = DATA_ID"
        **/

        public function get_data_by_id($table='',$kol_id='',$id='')
        {
        	if (empty($table) || empty($kol_id) || empty($id)) {
        		return false;
        	}else{
        		$query = $this->db->get_where($table, array($kol_id => $id));
        		return $query->result_array();
        	}
        }
		/**
        * @insert_entry untuk menyisipkan data ketabel
		* seperti perintah sql "INSERT INTO TABLE(COLUMN) VALUES(DATA)";
		**/
        public function insert_entry($table='',$data=array())
        {
			if (empty($table) || count($data) <= 0)  {
				return false;
			}else{
				$this->db->insert($table, $data);
				return $this->db->insert_id();
			}
        }
        /**
        * @get_alldata untuk menampilkan semua data tabel dalam bentuk array 
		* seperti perintah sql "SELECT * FROM TABLE";
		**/

        public function get_alldata($table='')
        {
        	if (empty($table)) {
        		$query = $this->db->get($table);
        		return $query->result_array();
        	}
        }
        
}
