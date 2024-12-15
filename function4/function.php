<!-- user defined function -->
<!-- mendefinisikan function  -->
<?php 

function salam($nama) {
    // Mendapatkan jam saat ini
    $jam = date("H");

    // Menentukan waktu berdasarkan jam
    if ($jam >= 5 && $jam < 12) {
        $waktu = "Pagi";
    } elseif ($jam >= 12 && $jam < 18) {
        $waktu = "Siang";
    } else {
        $waktu = "Malam";
    }

    // Mengembalikan salam dengan waktu dan nama
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Nissa"); ?></h1>
</body>
</html>
