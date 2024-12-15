<?php 
// standar output untuk menampilkan sesuatu ke layar
// echo, print untuk tulisan / variabel

// men debbug mencari kesalahan tahap development
// print_r untuk mecetak isi array
// var_dump untuk melihat isi variabel

echo "Nama Saya NIssa";
print "Ika rachmawati";
print_r("saya mau belajar php");

var_dump("semoga sukses"); 
// menmpilan tipe data dan ukuran

// Penulisan sintaks PHP
// Variabel dan Tipe Data
// Variabel

$nama = "Nissa";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo"$nama"; ?></h1>
</body>
</html>

<!-- operator -->
<!-- Aritmetika -->
<?php 
$x = 10;
$y = 20;
echo $x * $y;
echo 1 + 1;

// penggabung string / concatenation / concat
// .
$nama_dp ="Nisa";
$nama_bkg ="Ika";
echo $nama_dp . "" . $nama_bkg;

// assigment penugasan
// =, +=, *=, :=, .=

$x =1;
$x -= 5;
echo $x;

$nama ="Nissa";
$nama .= " ";
$nama .= "Galih";
echo $nama; 

// Perbandingan
// <, >, <=, >=, ==, !=


// pengkondisian
// isinya true / false
var_dump(1 < 5); 

// identitas (cek tipe data)
// ===, !==
var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
// dua-duanya harus bener 

var_dump($x < 20 || $x % 2 == 0);
// boleh hanya satu yang benar maka (true)

?>
      