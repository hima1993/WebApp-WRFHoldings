<?php

class gen_model extends CI_Model{

	public function userAuth($userInfo){
		$this->db->select("Username,UserPassword");
		$result = $this->db->get_where("user",$userInfo);

		if($result->num_rows == 1){
			$currentUser = $result->result_array()[0];
			return true;
		}
		else{
			return false;
		}
	}

	//this method insert data into a given table
	function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }

     //makes this to work with columns and without where,limit and offset
    function getData($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {
		$limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';
                var_dump($orderby);
                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
					var_dump($orderbyString);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();
            return $query->result();
        }
    } 

    function getDataIn($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {
        $limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where_in($where_arr["KeyField"],$where_arr["values"]);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';

                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();

            return $query->result();
        }
    }
	 function getAllRecords()
        {
        
        $this->db->select("CustomerName,CustomerAddress,CustomerContact,CustomerRegDate");
        $this->db->from('Customer');
         $q = $this->db->get();

         return $q->result();
            
        }
}
