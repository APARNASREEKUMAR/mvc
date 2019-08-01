<?php
include '/var/www/html/mvc/app/core/View.php';

class Controller
{
    protected $view;
    protected $model;

    public function __construct()
    {
        
    }
    public function view($viewName,$data=[])
    {
        $this->view = new View($viewName,$data);
        return $this->view;
    }
    
    public function model($modelName)
    {
        // echo "from model<br>";
        // echo $modelName;
        if(file_exists('/var/www/html/mvc/app/model/'.$modelName.'.php')) {
            include('/var/www/html/mvc/app/model/'.$modelName.'.php');
            $this->model = new $modelName;
        }
    }
}
?>