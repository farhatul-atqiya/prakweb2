<?php
function kelulusan ($_nilai){
        //jika nilai rata-rata siswa di bawah 55 tidak lulus
        //jika nilai rata-rata siswa di aras 55 lulus 
if ($_nilai <= 55 ){
    return 'Tidak lulus';
} else {
    return 'Anda lulus';
}
}

// 1.buat fungsi grade, lalu kasih keterangan
// jika nilai di atas 85 grade A
// jika nilai di atas 70 grade B
// jika nilai di atas 56 grade C
// jika nilai di atas 36 grade D
// jika nilai di atas 10 grade E
// jika tidak ada nilai cetak I (Anda tidak ada nilai)
function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif ($_nilai >= 70){
        return "B";
    }elseif ($_nilai >= 56){
        return "C";
    }elseif ($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "I(Tidak ada nilai)";
    }
}
?>