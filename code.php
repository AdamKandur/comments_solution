<?php

    $database = new SQLite3('comments.sqlite');
    $database -> exec('create table if not exists comments(name varchar(255), comment varchar (255))');

    if (isset($_POST['name']) && isset($_POST['comment']))
    {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $database -> exec("insert into comments(name, comment) values('$name', '$comment')");
    }

?>
