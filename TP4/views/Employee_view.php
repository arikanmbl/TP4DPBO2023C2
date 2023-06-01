<?php

  class EmployeeView {
    public function render($data){
      $no = 1;
      $dataKaryawan = null;
      $dataAuthor = null;
      foreach($data['karyawan'] as $val){
        list($id, $name, $email, $phone, $joining_date) = $val;
        $dataKaryawan .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $name . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $joining_date . "</td>";
        $dataKaryawan .= "
                <td>
                  <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
                  <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
                </td>";
        $dataKaryawan .= "</tr>";
        
      }

      $tpl = new Template("templates/index.html");

      $tpl->replace("DATA_TABEL", $dataKaryawan);
      $tpl->write(); 
    }
  }
?>