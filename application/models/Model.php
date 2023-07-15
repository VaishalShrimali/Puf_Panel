<?php

class Model extends CI_Model
{
    public function select_where($table, $where)
    {
        $result = $this->db->get_where($table, $where);
        return  $result->result_array();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function select($table)
    {
        $result =  $this->db->get($table);
        return $result->result_array();
    }

    public function update($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function delete($table, $where)
    {
        return $this->db->delete($table, $where);
    }

    public function join($table, $table1, $data)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table1, $data);
        $select = $this->db->get();
        return $select->result_array();
    }

    public function join_where($table, $table1, $data, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table1, $data);
        $this->db->where($where);
        $select = $this->db->get();

        return $select->result_array();
    }

    public function two_join($table, $table1, $data, $table2, $data2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table1, $data);
        $this->db->join($table2, $data2);
        $select = $this->db->get();
        return $select->result_array();
    }

    public function for_join($table, $table1, $data, $table2, $data2, $table3, $data3, $table4, $data4)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table1, $data);
        $this->db->join($table2, $data2);
        $this->db->join($table3, $data3);
        $this->db->join($table4, $data4);
        $select = $this->db->get();
        return $select->result_array();
    }

    public function for_join_where($table, $table1, $data, $table2, $data2, $table3, $data3, $table4, $data4, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table1, $data);
        $this->db->join($table2, $data2);
        $this->db->join($table3, $data3);
        $this->db->join($table4, $data4);
        $this->db->where($where);
        $select = $this->db->get();
        return $select->result_array();
    }
}
