
<?php //jam
$aktivitas = "bangun";
$jam = ("03:59:00");

if($jam >= "04:00:00" && $jam <= "06:15:00"){ //pagihari
   if ($jam >= "04:00:00" && $jam < "04:20:00"){
      $aktivitas = "Bangun";

   }elseif($jam >= "04:20:00" && $jam < "04:30:00" ){
      $aktivitas = "Sholat shubuh";
   }elseif($jam >= "04:30:00" && $jam < "05:00:00" ){
      $aktivitas = "Merapikan kamar";
   }elseif($jam >= "05:00:00" && $jam < "05:30:00" ){
      $aktivitas = "Siap-siap ke sekolah";
   }elseif( $jam >= "05:30:00" && $jam < "06:00:00"){
      $aktivitas = "Sarapan";
   }
   else{
      $aktivitas = "Berangkat ke sekolah";
   }
   }elseif($jam > "06:15:00" && $jam < "22:00:00"){//sore-malam
      if($jam > "06:15:00" && $jam <= "15:25:00"){
         $aktivitas = "Berkegiatan di sekolah";
      } elseif($jam > "15:25:00" && $jam <= "15:30:00"){
            $aktivitas = "Pulang sekolah";
      } elseif ($jam > "15:30:00" && $jam < "15:44:00"){
         $aktivitas = "Perjalanan";
      } elseif ($jam >= "15:44:00" && $jam <= "15:45:00"){
         $aktivitas = "Tiba dirumah";
      } elseif ($jam >= "15:46:00" && $jam < "15:50:00"){
         $aktivitas = "Mandi dan bersiap";
      } elseif ($jam >= "15:50:00" && $jam < "16:20:00"){
         $aktivitas = "Mengaji";
      } elseif ($jam >= "16:20:00" && $jam < "18:20:00"){
         $aktivitas = "Belajar";
      } elseif($jam >= "18:20:00" && $jam < "18:25:00"){
         $aktivitas = "Belanja";
      } elseif($jam >= "18:25:00" && $jam < "18:30:00"){
         $aktivitas = "Sholat magrib";
      } elseif ($jam >= "18:30:00" && $jam < "18:45:00"){
         $aktivitas = "Makan malam";
      } elseif($jam >= "18:45:00" && $jam < "19:10:00"){
         $aktivitas = "Sholat isya";      
      } elseif ($jam >= "19:10:00" && $jam < "19:40:00"){
         $aktivitas = "Chatting";
      } elseif ($jam >= "19:40:00" && $jam < "20:10:00"){
         $aktivitas = "Menghafal";
      } elseif  ($jam >= "20:10:00" && $jam <= "21:40:00"){
         $aktivitas = "Mengobrol bersama keluarga";
      } else {
         $aktivitas = "Main hp";
      } 
   }else{
         $aktivitas = "Tidur";
   }

echo $jam .(" andi sedang "). $aktivitas;

//list
?>

<html>
   <head>
      <title> Kegiatan Andi </title>
</head>
<body>
   <h2> Kegiatan Andi </h2>
   <ol>
   <?php
      echo  "<li> 04.00-04.20 Bangun </li>";  
      echo  "<li> 04.20-04.30 Sholat Shubuh </li>";
      echo  "<li> 04.30-05.00 Membersihkan kamar </li>";
      echo  "<li> 05.00-05.30 Bersiap-siap ke sekolah </li>";
      echo  "<li> 05.30-06.00 Sarapan </li>";
      echo  "<li> 06.00-06.15 Berangkat ke sekolah </li>";
      echo  "<li> 06.15-15.25 Berkegiatan di sekolah </li>";

      echo  "<br> <li> 15.25-15.30 Pulang sekolah </li>";
      echo  "<li> 15.30-15.44 Perjalanan pulang </li>";
      echo  "<li> 15.44-15.45 Tiba di rumah </li>";
      echo  "<li> 15.46-15.50 Mandi dan bersiap </li>";
      echo  "<li> 15.50-16.20 Mengaji </li>";
      echo  "<li> 16.20-18.20 Belajar </li>";
      echo  "<li> 18.20-18.25 Belanja </li>";
      echo  "<li> 18.25-18.30 Sholat magrib </li>";
      
      echo  "<br> <li> 18.30-18.45 Makan malam </li>";
      echo  "<li> 18.45-19.10 Sholat isya </li>";
      echo  "<li> 19.10-19.40 Chatting </li>";
      echo  "<li> 19.40-20.10 Menghafal </li>";
      echo  "<li> 20.10-20.40 Mengobrol </li>";
      echo  "<li> 21.40-22.00 Main hp </li>";
      echo  "<li> 22.00-04.00 Tidur </li>";

    ?>
    </ol>
</body>
</html>