<?php

require '_Controllers/functions.php';
require '_Controllers/db.php';

use Blog\DB;

$conn = DB\connect($config);
if(!$conn) die('problem connecting');

$posts = DB\query('SELECT * FROM posts WHERE id = :id', array('id' => $_GET['id']),$conn);
        
print_r($posts);



?>