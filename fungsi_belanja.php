<?php
function harga ($_produk , $jumlah){
    if ($produk == 'tv'){
        return 4200000 * $jumlah;
    }elseif ($produk == 'kulkas'){
        return 3100000 * $jumlah;
    }elseif ($produk == 'mesin_cuci'){
        return 3800000 * $jumlah;
    }
}
?>