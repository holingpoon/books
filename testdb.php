<?php
    $db = new SQLite3('test.db');
    $result = $db->query('SELECT * FROM book');
    $books = array();
    $i = 0;
    while (($row = $result->fetchArray()) !== false) {
        $books[$i]['id'] = $row['id'];
        $books[$i]['title'] = $row['title'];
        $books[$i]['firstname'] = $row['firstname'];
        $books[$i]['lastname'] = $row['lastname'];
        $books[$i]['status'] = $row['status'];
        $books[$i]['image'] = $row['image'];
        $i += 1;
    }
    echo json_encode($books);
?>
