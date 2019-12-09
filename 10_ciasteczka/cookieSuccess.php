<?php
session_start();
session_destroy();

echo 'Imie i Nazwisko ",$_SESSION['name'],'<br>';
echo 'Wiek ',$_COOKIE['wiek']'<br>';
echo 'Narodowość ',$_COOKIE['narodowosc']'<br>';
 ?>
