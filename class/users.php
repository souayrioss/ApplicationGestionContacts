<?php

    require_once('db.php');
    class User extends Db{
        private $id;
        private $email ;
        private $userName ;
        private $password;

        public function __construct($email, $userName, $password)
        {
            $this->email = $email ;
            $this->userName = $userName ;
            $this->password = $password ;
        }
        public function getUserByEmail(){
            $conn = $this->connect();
            if($conn == null) echo 'no conn' ;
            $sql = "SELECT * FROM users WHERE email = :email";
            
            $stm = $conn->prepare($sql);
            $stm->execute([
                ':email'=> $this->email
            ]);
            $data = $stm->fetch(PDO::FETCH_ASSOC);
            if(!$data)
                return true;
            else
                return false;
        }
        public function addUser(){
            $conn = $this->connect();
            if($conn == null) echo 'connextion failed' ;
            if($this->getUserByEmail()){
            $sql ="INSERT INTO users(userName, email, password) VALUES (:userName, :email, :password)";
            $stm = $conn->prepare($sql);
            $stm->execute([
                ':userName'=> $this->userName,
                ':email'=> $this->email,
                ':password'=> $this->password
            ]);
                echo '<script>alert("Create user succusful")</script>';
                echo '<script>window.location="login.php"</script>';
            $conn = null;
            }else{
                echo '<script>alert("User alredy existe")</script>';
                echo '<script>window.location="signup.php"</script>';
            }
        }
        public function loginUser(){
            $conn = $this->connect();
            if($conn == null) echo 'no conn' ;
            $sql = "SELECT * FROM users WHERE userName = :userName and password = :password";
            
            $stm = $conn->prepare($sql);
            $stm->execute([
                ':userName'=> $this->userName,
                ':password'=> $this->password
            ]);
            $data = $stm->fetch(PDO::FETCH_ASSOC);
            if($data)
            {
                session_start();
                $_SESSION['id'] = $data['id'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['userName'] = $data['userName'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['regDate'] = $data['create_at'];
                $_SESSION['logDate'] = date("d/M/Y");
                header('location: profil.php');

            }
        else{
            echo '<script>alert("User Not Found")</script>';
            echo '<script>window.location="login.php"</script>';
        }
                
        }

        
    }
