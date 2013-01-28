<?php
    $db = new SQLite3('test.db');
    $result = $db->query('SELECT * FROM book');
    $books = array();
    $i = 0;
    while (($row = $result->fetchArray()) == true) {
        $books[$i]['id'] = $row['id'];
        $books[$i]['title'] = $row['title'];
        $books[$i]['firstname'] = $row['firstname'];
        $books[$i]['lastname'] = $row['lastname'];
        $books[$i]['status'] = $row['status'];
        $i += 1;
//        echo "Id: ". $row['id']. "<br/>";
//        echo "Title: ". $row['title']. "<br/>";
//        echo "Author: ". $row['firstname']." ".$row['lastname']. "<br/>";
//        echo "Status: ". $row['status']. "<br/><br/>";
    }
    echo json_encode($books);
?>
