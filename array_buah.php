<?php
//cara penulisan array


//array indexing
$buah = ['alpukat','jeruk','mangga','pisang'];
//cara manggil array indexing
echo $buah[1];

//cara mencetak array assosiatif dengan foreach
echo '<br/>Jumlah buah ' .count($buah);

//cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "</ol>";

//====================================
//tambahkan buah baru ke dalam array
$buah[] = "Durian";


//cetak seluruh buah
echo "<ol>";
foreach($buah as $buas){
    echo "<li>$buas</li>";
}
echo "</ol>";
?>