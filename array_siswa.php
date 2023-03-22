<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- Ini untuk buka konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Daftar nilai Siswa</h1>
        </div><!-- /.col -->
        
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Nilai siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <br>
<section class="content">
  
<?php
//buatlah data nilai siswa dengan array assosiatif
$ns1 = ['id'=>1, 'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78, 'nilaiAkhir'=>85];
$ns2 = ['id'=>2, 'nim'=>'01102','uts'=>85,'uas'=>90,'tugas'=>88, 'nilaiAkhir'=>87];
$ns3 = ['id'=>3, 'nim'=>'01103','uts'=>89,'uas'=>95,'tugas'=>98, 'nilaiAkhir'=>90];
//simpan seluruh data variable array assosiatif 
//ke dalam array indexing
$ar_nilai = [$ns1,$ns2,$ns3];
?>
<!--codingan html -->
<h3 style="text-align: center;">Daftar Nilai Siswa</h3>
<br>
<table border="1" width="100%">
<thead style="background-color: pink;">
    <tr style="text-align: center;">
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </tr>
</thead>
<tbody style="text-align: center;">
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai){
        echo '<tr><td>' .$nomor. '</td>';
        echo '<td>'.$nilai['nim'].'</td>';
        echo '<td>'.$nilai['uts'].'</td>';
        echo '<td>'.$nilai['uas'].'</td>';
        echo '<td>'.$nilai['tugas'].'</td>';
        echo '<td>'.$nilai['nilaiAkhir'].'</td>';
        echo '<tr/>';
        $nomor++;
    }
    ?>
</tbody>
</table>


</section>
</div>
<!-- ini untuk tutup konten -->
<?php
include_once('footer.php');
?>

