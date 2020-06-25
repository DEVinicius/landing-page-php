<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Company;
use Source\Models\Validation;

class CompanyController{
    
    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__."/../../theme/View","php");   
    }

    public function index():void
    {
        echo $this->view->render("company",[
            "title" => "Empresa",
            "message" => null
        ]);
    }

    public function create(array $data):void{
        $validation = new Validation();
        $company = new Company();

        if(!isset($data["get_info"]))
            $get_info = 0;
            else
            $get_info = $data['get_info'];

        if(!isset($data["get_email"]))
            $get_email = 0;
            else
            $get_email = $data['get_email'];

        if(!$validation->cnpjValidation($data["cnpj"])){
            echo $this->view->render("company",[
                "title" => "Empresa",
                "message" => "CNPJ Inválido"
            ]);
        }
        else{  
            $company->setCompany($data["name"],$data["cnpj"],$data["email"],$data["phone"],$get_info,$get_email);
            $company->create();
            
            echo $this->view->render("company",[
                "title" => "Empresa",
                "message" => null
                ]);
        } 
    }

    
}