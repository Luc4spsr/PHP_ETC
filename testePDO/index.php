<?php 
    //-------------------------------------CONEXÃO--------------------------//
    try {
        $pdo = new PDO('mysql:host=localhost;port=3307;dbname=agencia', 'root', '');
    } catch (PDOException $e) {
        echo "Erro com o banco de dados: ".$e->getMessage();
    } catch (Exeception $e) {
        echo "Erro generico: ".$e->getMEssage();
    }

    //---------------------------------------INSERT-------------------------------//
    
    /*$res = $pdo->prepare("INSERT INTO veiculos(placa, renavan, ano_fabricacao, marca, cor, combustivel)
    VALUES(:p, :r, :a, :m, :c, :com)");

    $res->bindValue(":p","XXX-8888");
    $res->bindValue(":r","2024");
    $res->bindValue(":a","2003");
    $res->bindValue(":m","Ford");
    $res->bindValue(":c","Branco");
    $res->bindValue(":com","Gasolina");
    $res->execute();*/

    //---------------------------------------DELETE-------------------------------------//
    
    /*$cmd = $pdo->prepare("DELETE FROM veiculos WHERE placa = :p");
    $cmd->bindValue(":p", "XXX-8888");
    $cmd->execute();*/

    //------------------------------------UPDATE--------------------------------------//
    /*$cmd = $pdo->prepare("UPDATE veiculos SET ano_fabricacao = :a where placa = :p");
    $cmd->bindValue(":a", "2000");
    $cmd->bindValue(":p", "XXX-8888");
    $cmd->execute();*/

    //--------------------------------SELECT-------------------------------
    /*$cmd = $pdo->prepare("SELECT * FROM veiculos where placa = :p");
    $cmd->bindValue(':p', 'XXX-8888');
    $cmd->execute();
    $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
    foreach ($resultado as $key => $value) {
        echo $key.": ".$value."<br>";
    }*/
?>