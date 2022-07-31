<?php
    require_once "models/user.php";

    class UserDAO implements UserDAOInterface {

        private $conn;
        private $url;

        public function __construct(PDO $conn, $url)
        {
            $this->conn = $conn;
            $this->url = $url;
        }

        public function buildUser($data){
            $user = new User();

            $user->id = $data["id"];
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->image = $data["image"];
            $user->bio = $data["bio"];
            $user->token = $data["token"];

            return $user;
        }

        public function create(User $user, $authUser = false){

        }

        public function update(User $user) {

        }
       
        public function verifyToken($protected = false){

        }

        public function setTokenToSession($token, $redirect = true){

        }

        public function authenticateUser($email, $password){

        }

        public function findByEmail($email) {
            echo " | FindByEmail | Recebi E-mail:.. $email <br><br>";
           
            if($email != "") { // Se o campo email não vir vazio
                echo "..: IF :.. Recebi E-mail:.. $email <br><br>";
                
                echo "Ligação a bd = ". $this->conn . "<br><br>";

                /*
                $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

                $stmt->bindParam(":email", $email);

                $stmt->execute();

                // Sem utilização do fetch
                if($stmt->rowCount() > 0) { // se número de linhas maior que 0 quer dizer que achou registos com o email
                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);

                    return $user; // retorna o user para o front

                } else {
                    return false;
                }
               */
            } else {
                echo "*** No ELSE Recebi E-mail:.. $email";
               // return false;
            }
        }

        public function findById($id) {

        }

        public function findByToken($token) {

        }

        public function changePassword(User $user){

        }

    }