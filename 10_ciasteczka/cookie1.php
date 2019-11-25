<?php
setcookie("age",20);
setcookie("age",30);

echo $_COOKIE['age'];

setcookie("city","Poznań",time()+20); //ustawia nam ile czsu będzie działać ciasteczko

//setcookie("age","",time()-1); usuwa ciasteczko
 ?>
