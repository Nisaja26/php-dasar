<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 
// menampilkan tanggan dengan format tertentu
  echo date("l, M-d-Y");
// l= hari 
// d=tanggal
// M = bulan dalam huruf
//  m bulan dalam angka
// Y = tahun
?>

<br>

<?php
// time
// UNIX Timestamp / EPOCH time
// detik yang berlalu sejak 1 januari 1970 sejarah koding
// 2 function dipake seraca bersamaan
echo date ("d M Y", time()-60*60*24*365);
?>

<br>

<?php
// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, blan, tanggal, tahun
echo date("l", mktime(0,0,0,10,2,2006));
?>

<br>

<?php
// strtotime
echo date("l", strtotime("2 aug 2006"));
?>

</body>
</html>