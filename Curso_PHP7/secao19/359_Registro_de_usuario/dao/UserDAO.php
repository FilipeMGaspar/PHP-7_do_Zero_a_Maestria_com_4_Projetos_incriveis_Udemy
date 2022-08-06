<?php
    require_once "models/user.php";
    require_once "models/Message.php";

    class UserDAO implements UserDAOInterface {

        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url)
        {
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
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
            
            $stmt = $this->conn->prepare("INSERT INTO users (
                name, lastname, email, password, token)
                VALUES (:name, :lastname, :email, :password, :token)"); // Query sql de inserção de dados

                $stmt->bindParam(":name", $user->name);
                $stmt->bindParam(":lastname", $user->lastname);
                $stmt->bindParam(":email", $user->email);
                $stmt->bindParam(":password", $user->password);
                $stmt->bindParam(":token", $user->token);

                $stmt->execute();

                //Autenticação do utilizador caso o authUser seja verdadeiro / TRUE
                if ($authUser) {
                    $this->setTokenToSession($user->token);
                }
        }

        public function update(User $user) {

        }
       
        public function verifyToken($protected = false){

        }

        public function setTokenToSession($token, $redirect = true){

            // Salvar token na sessão
            $_SESSION["token"] = $token;

            if($redirect) {
                // Redireciona para o perfil do utilizador
                $this->message->setMessage("Seja Bem-vindo!", "success", "editprofile.php");
            }
        }

        public function authenticateUser($email, $password){

        }

        public function findByEmail($email) {
           
            if($email != "") { // Se o campo email não vier vazio
        
                $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email"); // Com erro não encontra a base de dados

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
               
            } else {
               return false;
            }
        }

        public function findById($id) {

        }

        public function findByToken($token) {

        }

        public function changePassword(User $user){

        }

    }