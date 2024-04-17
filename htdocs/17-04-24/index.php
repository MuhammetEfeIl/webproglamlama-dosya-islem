<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$dosya_isimleri = array("kayit1","kayit2","kayit3","kayit4","kayit5");
for($i=0;$i<count($dosya_isimleri);$i++){
 touch("Dosyalarim/".$dosya_isimleri[$i].".txt");
}
$dosya = fopen('Dosyalarim/Dosya.txt','r');
$dosya_boyutu = filesize('Dosyalarim/Dosya.txt');
$dosya_icerigi= fread($dosya,$dosya_boyutu);
echo "<b style='font-size:25px; background-color:orange'> $dosya_icerigi</b>"
?>
<?php
$dosya = fopen('Dosyalarim/liste.txt', 'r');
while(!feof($dosya)){
 $okunan_satir=fgets($dosya);
 echo "<ul type='circle'>
             <li style='background-color:cyan'> $okunan_satir </li>
 </ul>";
}
fclose($dosya);
?>
 <div>
 <form action="kayit.php" method="get">
 <input type="sublime" name="notlar" placeholder="Not Gir !" >
       

 <br>
 <input type="submit" value="Kaydet">
 </form>
 <div>

<?php
	unlink("aktif/12.Sınıf/03numaraliOgrenci.txt");
	unlink("aktif/12.Sınıf/06numaraliOgrenci.txt");
	unlink("aktif/12.Sınıf/16numaraliOgrenci.txt");
	echo "3 Öğrencinin dosya bilgileri silindi.";
	touch("mezun/2024_03numaraliOgrenci.txt");
	touch("mezun/2024_06numaraliOgrenci.txt");
	touch("mezun/2024_16numaraliOgrenci.txt");
	echo "3 Öğrenci için yeni dosyalar oluşturuldu.";
?>

</body>
</html>