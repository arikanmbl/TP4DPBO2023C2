<?php

class Dept extends DB
{
    function getDepts()
    {
        $query = "SELECT * FROM tb_departemen";
        return $this->execute($query);
    }

    function getDept($id)
    {
        $query = "SELECT * FROM tb_departemen WHERE dept_id = $id";
        return $this->execute($query);
    }

    function addDept($name)
    {
        $query = "INSERT INTO tb_departemen name VALUES $name";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function editDept($data)
    {
        $id = $data['dept_id'];
        $name = $data['name'];

        $query = "UPDATE tb_departemen SET name = $name, WHERE dept_id = $id";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function deleteDept($id)
    {
        $query = "DELETE FROM tb_departemen WHERE dept_id = $id";

        // Mengeksekusi query
        return $this->execute($query);
    }
}

?>
