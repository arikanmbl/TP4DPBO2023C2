<?php

class Employee extends DB
{
    function getEmployees()
    {
        $query = "SELECT * FROM tb_karyawan";
        return $this->execute($query);
    }

    function getEmployee($id)
    {
        $query = "SELECT * FROM tb_karyawan WHERE employee_id = $id";
        return $this->execute($query);
    }

    function addEmployee($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];

        $query = "INSERT INTO tb_karyawan (name, email, phone) VALUES ('$name', '$email', '$phone')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function editEmployee($data)
    {
        $id = $data['employee_id'];
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];

        $query = "UPDATE tb_karyawan SET name = '$name', email = '$email', phone = '$phone' WHERE employee_id = $id";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function deleteEmployee($id)
    {
        $query = "DELETE FROM tb_karyawan WHERE employee_id = $id";

        // Mengeksekusi query
        return $this->execute($query);
    }
}

?>
