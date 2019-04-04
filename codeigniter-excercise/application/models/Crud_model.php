<?php

class Crud_model extends CI_Model{

    function __construct(){

        parent::__construct();

    }

    function insert_letter($data){

        // testing to see what is in the array
			// echo "<pre>";
			// print_r($data);
            // echo "</pre>";


        // using CI's unique language for DB queries. You can also use standard PHP/MySQL syntax.
        // In this case, this works only if the array items are named the same as the DB fields.
        $this->db->insert('letters', $data);


    }

    function get_letters(){

        $query = $this->db->get('letters');

        if($query->num_rows() > 0){
            return $query->result();
        }else {
            return FALSE;
        }
    }

    function get_letter_detail($id){



        $this->db->where('letters.lid', $id);

        $this->db->join('tank_users','letters.author_id = tank_users.id');


        $query = $this->db->get('letters');

        if($query->num_rows() > 0){
            return $query->result();
        }else {
            return FALSE;
        }

    }

    function edit_letter($data, $id){
        // on your own... 2 lines of code to edit an item. Test using php myadmin
        $this->db->where('lid', $id);
        $this->db->update('letters', $data);
    }

    function delete_row($id){

        $this->db->where('lid', $id);
        $this->db->delete('letters');
    }

    function check_owner($item_id, $user_id){

        // this will have 2 WHERE clauses
        // 1: WHERE item_id is the id of the letter
        // 2: WHERE user_id is the id of the person logged in

        // do a basic select, if it returns something, then this user owns that item
        // if it returns FALSE, then ntohing was found in the db for this user and that item, so the DO NOT own it...in the controller we kick them out
        // $query = $this->db->get('letter');

        $this->db->select('*');
        $this->db->from('letters');
        $this->db->where('lid', $item_id);
        $this->db->where('author_id', $user_id);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            return $query->result();
        }else {
            return FALSE;
        }

    }


}

?>