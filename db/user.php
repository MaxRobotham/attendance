<?php 

    class user{
        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
        $this->db = $conn;
        }

        public function insertUser($username,$password){
            try {
                $result =  $this->getUserbyUsername($username);
                if($result['num'] > 0){
                    return false;                
                }else{
                    $new_password = md5($password.$username);
                    //define sql statement to be executed
                    $sql = "INSERT INTO users (username,password) VALUES (:username,:password)";
                    //prepare the sql statement for execution
                    $stmt = $this->db->prepare($sql);
                    // bind all placeholders to the actual values
                    $stmt->bindparam(':username',$username);
                    $stmt->bindparam(':password',$new_password);                    
                    
                    //evecute statement
                    $stmt->execute();
                    return true;
                }
            
            } catch (PDOExecption $e) {
                echo $e->getMessage();
                return false;
            }


        }

        public function getUser($username,$password){
            try {
                $sql = "SELECT * FROM users where username = :username AND password = :password" ;
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->bindparam(':password', $password);
                $stmt-> execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOExecption $e) {
                echo $e->getMessage();
            return false;
            }

        }

        public function getUserbyUsername($username){
            try {
                $sql = "SELECT count (*) as num from users where username =:username";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt-> execute(); // code has to be commented when $user->insertUser("admin","password"); is uncommented on conn.php
                $result = $stmt->fetch();
                return $result;
            } catch (PDOExecption $e) {
                echo $e->getMessage();
            return false;
            }

        }

        public function getUsers(){
            try{
                $sql = "SELECT * FROM users";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }

?>
