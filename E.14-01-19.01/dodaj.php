<?php
$conn = mysqli_connect('localhost', 'root', '', 'dane'); 
$tytul = $_POST['tytul'];
$gatunek = $_POST['gatunek'];
$rok = $_POST['rok'];
$ocena = $_POST['ocena'];
$zapytanie = "INSERT INTO `filmy` ('tytul',`gatunki_id`,  `rok`, `ocena`) VALUES ('".$tytul."',".$gatunek.",".$rok.",".$ocena.")";
$zapytaniequery = mysqli_query($conn,$zapytanie);
$zapytaniequery;
echo 'tytul '. $tytul.' został dodany do bazy';
mysqli_close($conn);
?>