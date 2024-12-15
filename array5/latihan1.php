<?php
// array
// variabel yang dapat menampung banyak nilai
// elemen pada array boleh memiliki tipe data berbeda
// pasangan antara key dan value
// ket adalah index, yang dimulai dari 0



// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// pertama kita perlu memanggil keywordnya dan juga karena tipe datanya string jadi menggunakkan kutip

// cara baru
$nama = ["nissa", "tiara", "nabila", "Maysya", "aida"];
// kita bisa langsung memberikan beberapa element

$campur = [189, "nissa", false ];




// menampilan array
// var_dump() / print_r()
var_dump($hari);
// menghasilkan tipe data, jumlah karakter dan baris
echo "<br>";
print_r($nama);
// menampilkan baris 
echo "<br>";

// menampilkan 1 elemet pada array
echo $hari[2];
echo "<br>";
echo $nama[0];

?>