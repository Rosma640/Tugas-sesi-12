<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Input Data Mahasiswa</title>
</head>
<body>
    <h1>From Input Data mahasiswa</h1>

    <form action="Prosess.php" method="post" >
    <table>
        <tr>
            <td>NIM : </td>
            <td><input type="text" name="nim"></td>
        </tr>
        
        <tr>
            <td>Nama :</td>
            <td><input type="text" name="nama"></td>
        </tr>
        
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
            </td>
        </tr>
        
        <tr>
            <td>Tanggal Lahir :</td>
            <td> 
                <select name="tgl" size="1">
                    <?php for ($i=1;$i<=31;$i++){
                        echo"<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                
                <select name="bln" size="1">
                    <?php
                    $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    for ($i=1;$i<=12;$i++){
                        echo"<option value=".$i.">".$bulan[$i]."</option>";
                    }
                    ?>            
                </select>
                
                <select name="thn" size="1">
                    <?php
                    for ($i=1999;$i<=2004;$i++){
                        echo"<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        
        <tr>
            <td>Tempat Lahir :</td>
            <td><input type="text" name="tmptlahir"></td>
        </tr>
        
        <tr>
            <td>Jurusan :</td>
            <td>
                <select name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option></select>
            </td>
        </tr>
        
        <tr>
            <td>Tahun Masuk :</td>
            <td><select name="thnmsk" size="1">
                <?php for ($i=2020;$i<=2023;$i++){
                    echo"<option value=".$i.">".$i."</option>";
                }
                ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>