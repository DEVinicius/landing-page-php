<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Models\Validation;

class UserController{

    private $view;
    
    public function __construct()
    {
        $this->view = new Engine(__DIR__."/../../theme/View","php");   
    }
    
    public function index():void
    {
        echo $this->view->render("user",[
            "title" => "User",
            "message" => null
            ]);
        }
        
    public function create(array $data):void{
        $validation = new Validation();
        $user = new User();

        if(!isset($data["get_info"]))
            $get_info = 0;
            else
            $get_info = $data['get_info'];

        if(!isset($data["get_email"]))
            $get_email = 0;
            else
            $get_email = $data['get_email'];

        if(!$validation->cpfValidation($data["cpf"])){
            echo $this->view->render("user", [
                "title" => "User",
                "message" => "CPF Inválido"
            ]);
        }
        else{
    
            $user->setUsers($data['name'],$data['cpf'],$data['email'],$get_info,$get_email);
            $user->create();
    
            echo $this->view->render("user", [
                "title" => "User",
                "message" => null
            ]);
        }
    }
}