<?php
    session_start(); // inicio da sesão

    require_once("connection.php");
    require_once("url.php");

    $data = $_POST;

    // Modificações no Banco
    if(!empty($data)){
        print_r($data);
        
        // Criar contato
        if($data["type"] === "create") {
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";
            
            $stmt = $conn->prepare($query);
        }

    // Seleção de dados
    } else {

        $id;

        if(!empty($_GET)) {
            $id = $_GET["id"];
        }
        // Retorna o dado de um contato
        if(!empty($id)){
           
            $query = "SELECT * FROM contacts WHERE id = :id"; // Query sql
    
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":id", $id);
    
            $stmt->execute();
    
            $contact = $stmt->fetch();//REtorna apenas um resultado
    
        } else {
            // Retorna todos os contatos
            $contacts = []; // iniciando o contacts como array vazio
    
            /*Seleção de todos os dados da tabela contacts */
            $query = "SELECT * FROM contacts";
    
            $stmt = $conn->prepare($query); // prepare da query a base de dados
    
            $stmt->execute(); // Execução da query na base de dados
    
            $contacts = $stmt->fetchAll(); // Recolha de todos os dados vindos do select
        }
        
    }