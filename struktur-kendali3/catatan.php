<?php 
// Pengulangan
// for
// while
// do... while
// forech pengulaangan khusus array

for( $i = 0; $i < 5; $i++) {
    echo "hello Nissa <br>";
}
// penjelasan
// for (inisialisasi; kondisi; iterasi) {
//     blok kode yang dijalankan
// }
// Inisialisasi ($i = 0):
// Kondisi ($i < 5):
// Iterasi ($i++):
// Setelah setiap eksekusi blok kode di dalam perulangan, nilai dari $i akan ditambahkan 1 (increment).



$i = 0;
while( $i < 5 ) {
    echo "Hallo Ika <br>";
$i++;    
}
// penjelasan
// selama kondisinya benar maka kita bisa mencetak apapun


$i = 0;
do{
    echo "Hello rachma <br>";
$i++;
} while( $i < 5);
// penjelasan
// semisal kondisinya salah blok akan tetap dijalankan tetapi hanya satu kali

?>