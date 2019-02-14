<?php

$sql = "SELECT 'orderDate', 'requiredDate', 'shippingDate', 'status', 'comments' FROM orders";    

// Förbered förfrågan till databasen
$stmt = $conn->prepare($sql);

// Skickar förfrågan till databasen
$stmt->execute();