<?php 

namespace Source\Models;

class Company extends Database{

    private $table_name = "company";
    private $conn;

    //attributes
    private $company_name;
    private $cnpj;
    private $email;
    private $phone;
    private $get_email_about_service;
    private $get_email_about_platform;

    public function __construct()
    {
        $this->conn = parent::__construct();
    }

    public function setCompany(string $company_name, string $cnpj, string $email, string $phone, int $get_email_about_service, int $get_email_about_platform){
        $this->company_name = $company_name;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->phone = $phone;
        $this->get_email_about_service = $get_email_about_service;
        $this->get_email_about_platform = $get_email_about_platform;  
    }

    public function create(){
        $query = $this->conn->prepare("INSERT INTO ".$this->table_name." (company_name, cnpj, email, phone, get_email_about_service, get_email_about_platform) VALUES(?, ?, ?, ?, ?, ?)");

        $query->bindParam(1,$this->company_name);
        $query->bindParam(2,$this->cnpj);
        $query->bindParam(3,$this->email);
        $query->bindParam(4,$this->phone);
        $query->bindParam(5,$this->get_email_about_service);
        $query->bindParam(6,$this->get_email_about_platform);

        $query->execute();
    }
}