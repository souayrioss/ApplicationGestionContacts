<?php
    require_once('db.php');
    class Contact extends Db{
        private $id;
        private $firstName ;
        private $lastName ;
        private $phone;
        private $email;
        private $address;
        private $id_user ;


        public function __construct( $firstName, $lastName,$phone ,$email, $address, $id_user)
        {
            $this->firstName = $firstName ;
            $this->lastName = $lastName ;
            $this->phone = $phone ;
            $this->email = $email ;
            $this->address = $address ;
            $this->id_user = $id_user ;
        }
        public function getUserByEmail(){
            $conn = $this->connect();
            if($conn == null) echo 'no conn' ;
            $sql = "SELECT * FROM users WHERE email = :email";
            
            $stm = $conn->prepare($sql);
            $stm->execute([
                ':email'=> $this->email
            ]);
            $data = $stm->fetchAll(PDO::FETCH_ASSOC);
            if(count($data) == 0)
                return null;
            else
                print_r($data[0]);
        }
        public function addUser(){
            $conn = $this->connect();
            if($conn == null) echo 'connextion failed' ;
            $sql ="INSERT INTO users(userName, email, password) VALUES (:userName, :email, :password)";
            $stm = $conn->prepare($sql);
            $stm->execute([
                ':userName'=> $this->userName,
                ':email'=> $this->email,
                ':password'=> $this->password
            ]);
            $conn = null;
        }
        public function getUserByEmailAndPassword(){
            $conn = $this->connect();
            if($conn == null) echo 'no conn' ;
            $sql = "SELECT * FROM users WHERE email = :email and password = :password";
            
            $stm = $conn->prepare($sql);
            $stm->execute([
                ':email'=> $this->email,
                ':password'=> $this->password
            ]);
            $data = $stm->fetchAll(PDO::FETCH_ASSOC);
            if(count($data) == 0)
                return null;
            else
                print_r($data[0]);
        }
    }
$user1 = new User('souayri@rrrr','aaaaaaaa','azerty22@');
$user1->addUser();
