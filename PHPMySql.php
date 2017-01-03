<?php
    if(!$link = mysql_connect('146.148.107.234', 'root', 'Escudo2430!')) {
        echo 'Não foi possível conectar ao mysql';
        exit;
    }// fim do if(!$link = mysql_connect('146.148.107.234', 'root', 'Escudo2430!'))

    if(!mysql_select_db('guestbook', $link)) {
        echo 'Não foi possível selecionar o banco de dados';
        exit;
    }// fim do if(!mysql_select_db('guestbook', $link))

    $sql = 'SELECT * FROM farma';
    $result = mysql_query($sql, $link);

    if(!$result) {
        echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
        echo 'Erro MySQL: '.mysql_error();
        exit;
    }// fim do if(!$result)

    while($row = mysql_fetch_assoc($result)) {
        echo $row['cidade'];
    }// fim do while($row = mysql_fetch_assoc($result))

    mysql_free_result($result);
?>
