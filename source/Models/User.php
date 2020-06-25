<?php 

namespace Source\Models;


class User extends Database{
    private $conn;
    private $table_name = "users";

    //attributes
    private $name;
    private $cpf;
    private $email;
    private $get_info;
    private $get_email;

    public function __construct()
    {
        $this->conn = parent::__construct();
    }

    public function setUsers(string $name, string $cpf, string $email, int $get_info, int $get_email){
        $this->name  = $name;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->get_info = $get_info;
        $this->get_email =$get_email;
    }

    public function create(){
        $query = $this->conn->prepare("INSERT INTO ".$this->table_name." (full_name,cpf,email,get_info,get_email) VALUES(?, ?, ?, ?, ?)");
        
        $query->bindParam(1, $this->name);
        $query->bindParam(2, $this->cpf);
        $query->bindParam(3, $this->email);
        $query->bindParam(4, $this->get_info);
        $query->bindParam(5, $this->get_email);
        $query->execute();
    }

    public function show(){
        $query = $this->conn->prepare("SELECT name,cpf,email FROM ".$this->table_name);
        $query->execute();

        return $query;
    }
}