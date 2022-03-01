<?php
    try {
        $dbh = new PDO('mysql:host=mysql;dbname=mysite', 'root', 'password');
        print "подключение успешно";
        
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    try {
        $id = 1;
$stmt = $dbh->prepare("SELECT `name` FROM users WHERE `id` = ?");
$stmt->execute([$id]);
$name = $stmt->fetchColumn();
echo 'Category name: '.$name;
        

}catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();}