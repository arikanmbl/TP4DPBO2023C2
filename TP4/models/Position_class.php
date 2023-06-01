<?php

class Position extends DB
{
    function getPositions()
    {
        $query = "SELECT * FROM tb_posisi";
        return $this->execute($query);
    }

    function getPosition($id)
    {
        $query = "SELECT * FROM tb_posisi WHERE position_id = $id";
        return $this->execute($query);
    }

    function addPosition($name)
    {
        $query = "INSERT INTO tb_posisi name VALUES $name";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function editPosition($data)
    {
        $id = $data['position_id'];
        $name = $data['name'];

        $query = "UPDATE tb_posisi SET name = $name, WHERE position_id = $id";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function deletePosition($id)
    {
        $query = "DELETE FROM tb_posisi WHERE position_id = $id";

        // Mengeksekusi query
        return $this->execute($query);
    }
}

?>
