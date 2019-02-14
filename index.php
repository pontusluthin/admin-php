
<?php

$host = 'localhost';
$db = 'classicmodels';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

try { $pdo = new PDO($dsn, $user,$pass);
} catch (\PDOException $e) {
 throw new \PDOException($e->getMessage(),(int)$e->getCode());
}



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
    <!--Funktioner, se alla ordrar, söka efter ordrar, lägga till och ta bort order--> 

<form ></form>

<h1>Test</h1>

<?php


$statement = $pdo->query('SELECT * FROM orders');
while ($row = $statement->fetch());

{

    print_r($row);   
    echo "<hr>";

}


?>





</body>
</html>