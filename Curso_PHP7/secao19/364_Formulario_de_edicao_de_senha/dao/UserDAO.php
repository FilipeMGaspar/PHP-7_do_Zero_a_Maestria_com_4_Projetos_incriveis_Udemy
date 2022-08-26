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

        public function update(User $user, $redirect = true) {
            $stmt = $this->conn->prepare("UPDATE USERS SET 
                name = :name,
                lastname = :lastname,              
                image = :image,
                token = :token,
                bio = :bio,                
                email = :email
                WHERE id = :id
            ");

            $stmt->bindParam(":name", $user->name);
            $stmt->bindParam(":lastname", $user->lastname);
            $stmt->bindParam(":email", $user->email);
            $stmt->bindParam(":image", $user->image);
            $stmt->bindParam(":bio", $user->bio);
            $stmt->bindParam(":token", $user->token);
            $stmt->bindParam(":id", $user->id);

            $stmt->execute();

            if($redirect) {
                // Redireciona para o perfil do utilizador
                $this->message->setMessage("Dados atualizados com sucesso!", "success", "editprofile.php");
            }
        }
       
        public function verifyToken($protected = false){

            if(!empty($_SESSION["token"])) {
                // Recebe o token da sessão/session
                $token = $_SESSION["token"];

                $user = $this->findByToken($token);
                
                if($user) {
                    return $user;
                } else if($protected){
                     // Redireciona utilizador não autenticado
                     $this->message->setMessage("Faça o login, para visualizar esta página!", "error", "");
                }

            } else if($protected) {
                // Redireciona utilizador não autenticado
                $this->message->setMessage("Faça o login, para visualizar esta página!", "error", "");
           }
        }

        public function setTokenToSession($token, $redirect = true) {

            // Salvar token na sessão
            $_SESSION["token"] = $token;

            if($redirect) {
                // Redireciona para o perfil do utilizador
                $this->message->setMessage("Seja Bem-vindo!", "success", "editprofile.php");
            }
        }

        public function authenticateUser($email, $password){

            $user = $this->findByEmail($email);

            if($user) {
                if(password_verify($password, $user->password)) { //Verificação de passwords se são iguais
                   
                    //Gerar o token e inserir na sessão
                    $token = $user->generateToken();
                    $this->setTokenToSession($token, false);

                    // atualizar token do utilizador na bd
                    $user->token = $token;
                    $this->update($user, false);

                    return true;
                    
                } else {
                    return false;
                }
            } else {
                return false;
            }
    
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
                       
            if($token != "") { // Se o campo token não vier vazio
        
                $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token"); // Com erro não encontra a base de dados

                $stmt->bindParam(":token", $token);

                $stmt->execute();

                // Sem utilização do fetch
                if($stmt->rowCount() > 0) { // se número de linhas maior que 0 quer dizer que achou registos com o token
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

        public function destroyToken() {
            //Remove token da sessão
            $_SESSION["token"] = "";

            // Redericionar e apresntar a mensagem de sucesso
            $this->message->setMessage("Logout efectuado com sucesso!", "success", "");// Por defeito redireciona para o index
        }

        public function changePassword(User $user){

        }

    }