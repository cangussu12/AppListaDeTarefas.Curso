<?php

    $dsn = 'mysql:host=localhost;dbname=db_php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario , $senha);
        
        $query = '
            select * from tb_usuarios where id = 2 
        ';

       $stmt = $conexao->query($query);
       $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
       echo '<pre>';
       print_r($usuario);
       echo '</pre>';

        echo $usuario['nome'];

    } catch(PDOException $e) {
        // echo '<pre>';
        //     print_r($e);
        // echo '</pre>';

        echo 'Erro: '. $e->getCode(). ' Mensagem: '. $e->getMessage();
        //registrar o erro de alguma forma.
    }