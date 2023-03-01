<?php 
$id_polaczenia = mysqli_connect('localhost', 'root', '', 'baza');
$data = $_POST['data'];
$ilosc = $_POST['ilosc'];
$numer = $_POST['numer'];
$zapytanie1 = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES('$data', '$ilosc', '$numer')";
if (isset($_POST['zgoda'])) {
$wynik = mysqli_query($id_polaczenia, $zapytanie1);
echo "Dodano rezerwacje do bazy";
}
else {
echo "Prosze o zgodę";
}
//$zapytanie1 = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES('$data', '$ilosc', '$numer')";
//$wynik = mysqli_query($id_polaczenia, $zapytanie1);
//echo "Dodano rezerwacje do bazy";
?>