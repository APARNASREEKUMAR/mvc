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
        print_r($cars);
        $this->view('car/index',
            $cars,
        );
        $this->view->render();
    }
    
}
?>