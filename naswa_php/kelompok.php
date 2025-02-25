<html>
   <head>
      <title>Kegiatan Andi</title>
   </head>
   <body>
      <h2>Kegiatan Andi</h2>
      <ol>
         <?php
         $jadwal = [
            "04.00-04.20 Bangun",
            "04.20-04.40 Sholat Subuh",
            "04.40-05.00 Olahraga"
         ];
         
         foreach ($jadwal as $kegiatan) {
            echo "<li>$kegiatan</li>";
         }
         ?>
      </ol>
   </body>
</html>
