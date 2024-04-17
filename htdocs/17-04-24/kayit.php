   <!DOCTYPE html>
   <html>
   <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title></title>
   </head>
   <body>
   <?php
   if(isset($_GET['notlar'])){
 $dosya = fopen('Dosyalarim/not.txt', 'w+');
 $gelen=$_GET['notlar'];
 fwrite($dosya,$gelen);
 fclose($dosya);
}
else{ echo "Dosya bulunamadı!";}
?>

   </body>
   </html>
    
