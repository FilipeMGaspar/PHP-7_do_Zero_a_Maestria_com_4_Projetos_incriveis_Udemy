<?php
    class Message {
        private $url;

        public function __construct($url)
        {
            $this->url = $url;
        }

        public function setMessage($msg, $type, $redirect = "index.php") {
            $_SESSION["msg"] = $msg;
            $_SESSION["type"] = $type;

            if ($redirect != "back") {
                header("Location: $this->url" . $redirect); // Redireciona para o index por padrão, ou para localização especifica
            } else {
                header("Location: " . $_SERVER["HTTP_REFERER"]); // Envia para a ultima página acessada
            }
        }

        public function getMessage() {

            if(!empty($_SESSION["msg"])) { // Verifica se a mensagem de sessão não está vazia
                return [
                    "msg" => $_SESSION["msg"],
                    "type" => $_SESSION["type"]
                ];
            } else {
                return false;
            }
        }

        public function clearMessage() {

        }
    }