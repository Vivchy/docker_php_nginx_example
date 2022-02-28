<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><a href="users.php">пользователи</a></div>
<form action= "post.php" method= "POST"> 
 
 <p>Имя: </p><p> <input type= "text" name= "name"> </p> 
  
 <p>E-mail: </p><p> <input type= "text" name= "email"></p> 
  
 <p>Сообщение: </p><p> <textarea rows= "10" cols= "45" name= "message"></textarea></p> 
  
 <input type= "submit" value= "Отправить"> 
</body>
</html>