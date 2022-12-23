<?php 

$nim = @$_POST['nim'];
$nama = @$_POST['nama'];
$jenis_kelamin = @$_POST['jenis_kelamin'];
$tgllahir      = @$_POST['tgl'].'-'.@$_POST['bln'].'-'.@$_POST['thn'];
$tmptlahir = @$_POST['tmptlahir'];
$jurusan = @$_POST['jurusan'];
$tahunmasuk = @$_POST['thnmsk'];

?>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Jurusan</th>
        <th>Tahun Masuk</th>
    </tr>

    <tr>
        <td><?= $nim ?></td>
        <td><?= $nama?></td>
        <td><?= $jenis_kelamin?></td>
        <td><?= $tgllahir?></td>
        <td><?= $tmptlahir?></td>
        <td><?= $jurusan?></td>
        <td><?= $tahunmasuk?></td>
    </tr>
</table>
