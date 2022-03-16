<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php require_once 'libfungsi.php';
    ?>
    <title>Praktikum Form</title>
</head>
<body>
        <div class="m-5 border border-success p-4 rounded">
            <form method="POST" autocomplete="off" action="nilai_siswa.php">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label" >Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div> 
                        <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="">Pilih Matkul</option>
                        <option value="basis_data">Basis Data</option>
                        <option value="php">PHP</option>
                        <option value="ddp">DDP</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
<fieldset style="padding:10px; border: 0.1em solid black; margin-right:50%; margin-left: 10px;">
  <legend>Nilai Anda</legend>
  <div>
    <?php
     if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $matkul = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
        $grade = ($nilai_akhir == "");
        $_nilai = $nilai_akhir;
        $hasil_ujian = ($_nilai);
     }

    switch ($matkul) {
        case "basis_data": 
            $matkul = "Basis Data";
            echo "Nama Mahasiswa :" .$nama;
            echo "<br> Matkul :" .$matkul;
            echo "<br> Nilai UTS :" .$nilai_uts;
            echo "<br> Nilai UAS :" .$nilai_uas;
            echo "<br> Nilai Tugas :" .$nilai_tugas;
            echo "<br> NILAI AKHIR :" .($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
        break;

        case "php": 
            $matkul = "PHP";
            echo "Nama Mahasiswa :" .$nama;
            echo "<br> Matkul :" .$matkul;
            echo "<br> Nilai UTS :" .$nilai_uts;
            echo "<br> Nilai UAS :" .$nilai_uas;
            echo "<br> Nilai Tugas :" .$nilai_tugas;
            echo "<br> NILAI AKHIR :" .($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
        break;

        case "ddp": 
            $matkul = "Dasar Dasar Pemrograman";
            echo "Nama Mahasiswa :" .$nama;
            echo "<br> Matkul :" .$matkul;
            echo "<br> Nilai UTS :" .$nilai_uts;
            echo "<br> Nilai UAS :" .$nilai_uas;
            echo "<br> Nilai Tugas :" .$nilai_tugas;
            echo "<br> NILAI AKHIR :" .($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
        break;
      default:
        # code...
        break;
    }

    if ($nilai_akhir == "") {
        echo $grade == "";
    } else if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
        echo 'Grade = E ';
    } else if ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        echo 'Grade = D ';
    } else if ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        echo 'Grade = C ';
    } else if ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        echo 'Grade = B ';
    } else if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        echo 'Grade = A. ';
    } 
else{
        echo 'Grade = I ';
    }

    switch ($nilai_akhir) {
        case $nilai_akhir >= 85 && $nilai_akhir <= 100: 
            $grade = "A";
            echo "Predikat : SANGAT MEMUASKAN";
        break;

        case $nilai_akhir >= 70 && $nilai_akhir <= 84: 
            $grade = "B";
            echo "Predikat : MEMUASKAN";
        break;

        case $nilai_akhir >= 56 && $nilai_akhir <= 69: 
            $grade = "C";
            echo "Predikat : CUKUP";
        break;

        case $nilai_akhir >= 36 && $nilai_akhir <= 55: 
            $grade = "D";
            echo "Predikat : KURANG";
        break;

        case $nilai_akhir >= 0 && $nilai_akhir <= 35: 
            $grade = "E";
            echo "Predikat : SANGAT KURANG";
        break;
        default:
        echo "Predikat : TIDAK ADA";
        # code...
        break;
    }


    ?>
  </div>
</fieldset>

</body>
</html>