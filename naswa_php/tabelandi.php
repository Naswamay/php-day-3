<?php

$KegiatanAndi = "22:00:00"; // Waktu saat ini

if ($KegiatanAndi >= "04:00:00" && $KegiatanAndi < "12:00:00") { // Siang - Sore
    if ($KegiatanAndi >= "04:00:00" && $KegiatanAndi < "12:00:00") { // Pagi
        if ($KegiatanAndi >= "04:00:00" && $KegiatanAndi < "04:20:00") {
            $aktivitas = "Bangun";
        } elseif ($KegiatanAndi >= "04:20:00" && $KegiatanAndi < "04:30:00") {
            $aktivitas = "Sholat Subuh";
        } elseif ($KegiatanAndi >= "04:30:00" && $KegiatanAndi < "05:00:00") {
            $aktivitas = "Membersihkan Kamar";
        }    elseif ($KegiatanAndi >= "05:00:00" && $KegiatanAndi < "05:30:00") {
                $aktivitas = "Bersiap ke sekolah";
        }   elseif ($KegiatanAndi >= "05:30:00" && $KegiatanAndi < "06:00:00") {
                    $aktivitas = "Sarapan";
        } else {
            $aktivitas = "Belajar di sekolah";
        }
    } else { // Siang - Sore
        if ($KegiatanAndi >= "12:00:00" && $KegiatanAndi < "15:30:00") {
            $aktivitas = "Belajar di sekolah";
        } elseif ($KegiatanAndi >= "15:30:00" && $KegiatanAndi < "15:45:00") {
            $aktivitas = "Perjalanan Pulang";
        } elseif ($KegiatanAndi >= "15:45:00" && $KegiatanAndi < "16:20:00") {
            $aktivitas = "Mengaji";
        } else {
            $aktivitas = "Aktivitas Sore Lainnya";
        }
    }
} elseif ($KegiatanAndi >= "18:00:00" && $KegiatanAndi < "22:00:00") { // Malam
    if ($KegiatanAndi >= "18:25:00" && $KegiatanAndi < "18:30:00") {
        $aktivitas = "Sholat Magrib ";
    } elseif ($KegiatanAndi >= "18:30:00" && $KegiatanAndi < "18:45:00") {
        $aktivitas = "Makan Malam";
    } elseif ($KegiatanAndi >= "18:45:00" && $KegiatanAndi < "19:10:00") {
        $aktivitas = "Sholat Isya ";
    } elseif ($KegiatanAndi >= "19:10:00" && $KegiatanAndi < "19:40:00") {
        $aktivitas = " Chatting";
    } elseif ($KegiatanAndi >= "19:40:00" && $KegiatanAndi < "20:10:00") {
        $aktivitas = "Menghafal ";
    } elseif ($KegiatanAndi >= "20:10:00" && $KegiatanAndi < "21:30:00") {
        $aktivitas = " Main HP";
    } 
    else {
        $aktivitas = "Mengobrol";
    }
} else { // Tidur
    $aktivitas = "Tidur";
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jadwal Kegiatan Andi</title>
   <style>
       body {
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 800px;
            width: 100%;
            border: 2px solid black;
            background-color: #f8f8f8;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #ddd;
        }
   </style>
</head>
<body>
    <div class="container">
        <h2>Jadwal Kegiatan Andi</h2>
        <h3><?php echo "Sekarang jam " . $KegiatanAndi . "<br>Andi sedang " . $aktivitas; ?></h3>

        <table>
            <tr>
                <th>Waktu</th>
                <th>Kegiatan</th>
            </tr>
            <tr><td>04:00 - 04:20</td><td>Bangun</td></tr>
            <tr><td>04:20 - 04:30</td><td>Sholat Subuh</td></tr>
            <tr><td>04:30 - 05:00</td><td>Membersihkan Kamar</td></tr>
            <tr><td>05:00 - 05:30</td><td>Bersiap Untuk Sekolah</td></tr>
            <tr><td>05:30 - 06:00</td><td>Sarapan</td></tr>
            <tr><td>06:00 - 06:15</td><td>Berangkat Ke Sekolah</td></tr>
            <tr><td>06:15 - 15:25</td><td>Berkegiatan Di Sekolah</td></tr>
            <tr><td>15:25 - 15:30</td><td>Pulang Sekolah</td></tr>
            <tr><td>15:30 - 15:44</td><td>Perjalanan Pulang</td></tr>
            <tr><td>15:44 - 15:45</td><td>Tiba Di Rumah</td></tr>
            <tr><td>15:45 - 15:50</td><td>Mandi Dan Bersiap Mengaji</td></tr>
            <tr><td>15:50 - 16:20</td><td>Mengaji</td></tr>
            <tr><td>16:20 - 18:20</td><td>Belajar</td></tr>
            <tr><td>18:20 - 18:25</td><td>Belanja</td></tr>
            <tr><td>18:25 - 18:30</td><td>Sholat Magrib</td></tr>
            <tr><td>18:30 - 18:45</td><td>Makan Malam</td></tr>
            <tr><td>18:45 - 19:10</td><td>Sholat Isya</td></tr>
            <tr><td>19:10 - 19:40</td><td>Chatting</td></tr>
            <tr><td>19:40 - 20:10</td><td>Menghafal</td></tr>
            <tr><td>20:10 - 20:30</td><td>Main HP</td></tr>
            <tr><td>20:30 - 21:00</td><td>Mengobrol</td></tr>
            <tr><td>21:00 - 21:15</td><td>Bersiap Tidur</td></tr>
            <tr><td>21:15 - 04:00</td><td>Tidur</td></tr>
        </table>
    </div>
</body>
</html>
