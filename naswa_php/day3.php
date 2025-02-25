<?php //nilai
$nilai  = 90 ;

if($nilai <= 79 && $nilai >= 70){
echo "C <br>";
}

else if ($nilai <= 69 && $nilai > 0){
    echo "D <br>";
}

 else if ($nilai >= 90 && $nilai <= 100){
    echo "A <br>";
 }

else if ($nilai >= 80 && $nilai <= 89){
   echo "B <br> ";
}

    else {
        echo "<br> niai wajib di atas 0";      
}



// jam

$jam = ("24:30:00");

echo "Sekarang menunjukkan pukul = $jam<br>";

if ($jam < date ("04:00:00") && $jam >= date ("00:00:00")){
echo $waktu = "Dini hari";
}

else if ($jam >= date ("04:00:00") && $jam < date ("10:00:00") ){
    echo $waktu = "Pagi hari";
}

 else if ($jam >= date ("10:00:00") && $jam < date ("15:00:00")){
    echo $waktu = "Siang hari";
 }

else if ($jam >= date ("15:00:00") && $jam < date ("17:30:00")){
   echo $waktu = "Sore hari";
}
else if ($jam >= date ("17:30:00") && $jam < date ("18:30:00")){
    echo $waktu = "Petang hari";
 }
 else if ($jam >= date ("18:30:00") && $jam < date ("24:00:00")){
    echo $waktu = "Malam hari";
 }

    else {
        echo $waktu = "Dunia lain";      
}



?>