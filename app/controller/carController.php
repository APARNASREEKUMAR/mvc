<?php
include_once '/var/www/html/mvc/app/core/Controller.php';

class carController extends Controller
{

    public function __construct()
    {
        // echo "I am in _CLASS_";
    }
    public function index($id='',$name='')
    {
        $this->model('Car');
        $cars=$this->model->getCars();
        // print_r($cars);
        $this->view('car/index',$cars);
        $this->view->render();
    }
    public function edit($id='',$name='')
    {
        $this->model('Car');
        $car=$this->model->getCarDetail($id);
        // print_r($car);
        $this->view('car/edit',$car);
        $this->view->render();
    }
    public function delete($id='',$name='')
    {
        $this->model('Car');
        $car=$this->model->deleteCar($id);
        $cars=$this->model->getCars();
        if($car == true) {
            $_SESSION["msgType"] = "success";
            $_SESSION["msgContent"] = "User Successfully Deleted !";
        } else {
            $_SESSION["msgType"] = "success";
            $_SESSION["msgContent"] = "User Successfully Deleted !";
        }
        $this->view('car/index',$cars);
        $this->view->render();
    }
    
}
?>