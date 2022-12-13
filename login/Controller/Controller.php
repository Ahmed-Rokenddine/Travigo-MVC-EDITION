<?php
include_once('Model/Model.php');
class Controller {
public $model;
public function __construct()
    {
        $this->model = new Model();
    }
public function invoke()
{
$reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
if($reslt == 'login')
{

header("location: ../views/main.php");
}
else
{
include 'view/login.php';
}
}
}
?>