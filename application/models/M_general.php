<?php


class M_general extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function statusLogin($username, $password) : bool {
        $compare = array(
            'username'=>$username,
            'password'=>$password
        );
        $chekLogin = $this->db->get_where("tb_user", $compare)->num_rows();
        return $chekLogin > 0;
    }

    public function getAllData(string $table) : object {
        return $this->db->get($table);
    }

    public function getWhere(string $table, array $condition) : object {
        return $this->db->get_where($table, $condition);
    }

    public function insert(string $table, array $data) : bool {
        return $this->db->insert($table, $data);
    }

    public function update(string $table, array $data) : bool {
        return $this->db->replace($table, $data);
    }

    public function delete(string $table, array $data) : bool {
        return $this->db->delete($table, $data);
    }

    public function selectJoin(string $select = '*', string $tableForm, array $join) {
        $query = $this->db->select($select)
            ->from($tableForm);

        foreach ($join as $key => $value) {
            $query->join($key, $value);
        }

        return $query->get();

    }
}