<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];

try {
    $dbh = new PDO('mysql:host=172.27.0.2;dbname=mysite', 'root', 'password');
    print "подключение успешно";
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
try {
$query = "INSERT INTO users (name, email) VALUE (:name, :email)";
$params = [
    ':name' => $name,
    ':email' => $email
];

$stmt = $dbh->prepare($query);
$stmt->execute($params);
print "Запись добавлена";
}catch (PDOException $e) {
    print "Error! WRITE: " . $e->getMessage() . "<br/>";
    die();
}

?>