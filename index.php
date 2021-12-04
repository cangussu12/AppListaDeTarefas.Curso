<?php

    $dsn = 'mysql:host=localhost;dbname=db_php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario , $senha);
        
        $query = '
            select * from tb_usuarios
        ';

       $stmt = $conexao->query($query);
       $lista = $stmt->fetchAll();
       echo '<pre>';
       print_r($lista);
       echo '</pre>';

        echo $lista[1]['email'];

    } catch(PDOException $e) {
        // echo '<pre>';
        //     print_r($e);
        // echo '</pre>';

        echo 'Erro: '. $e->getCode(). ' Mensagem: '. $e->getMessage();
        //registrar o erro de alguma forma.
    }