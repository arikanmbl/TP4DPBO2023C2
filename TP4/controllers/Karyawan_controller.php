<?php
include_once("conf.php");
include_once("models/Employee_class.php");
include_once("models/Dept_class.php");
include_once("models/Position_class.php");
include_once("views/Employee_view.php");

class KaryawanController {
  private $karyawan;
  private $author;

  function __construct(){
    $this->karyawan = new Employee(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->karyawan->open();
    $this->karyawan->getEmployees();
    
    $data = array(
      'karyawan' => array(),
    );
    while($row = $this->karyawan->getResult()){
      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
      array_push($data['karyawan'], $row);
    }
    $this->karyawan->close();

    $view = new EmployeeView();
    $view->render($data);
  }

  function add(){
    
  }

  function edit(){
    
  }

  function delete(){
    
  }

}