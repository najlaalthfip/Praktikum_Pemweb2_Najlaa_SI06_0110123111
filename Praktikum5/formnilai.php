<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Nilai Ujian</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 65px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="margin-right: 20px;">WEB02</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 20px;">
                    Review PHP
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 470px;">
                    PHP5 OOP
                </a>
            </li>
        </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="margin-right: 10px;">
            <button class="btn btn-outline-secondary" type="submit">Submit</button>
            </form>
        </div>
    </div>
    </nav>
    <hr/>
    <div class="container">
        <h3 class="text-align">Form Nilai Ujian</h3> <hr/>
        <form method="POST" action="formnilai.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label text-right">NIM</label>
                <div class="col-4">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="mk" class="col-4 col-form-label text-right">Pilih MK</label>
                <div class="col-4">
                <select id="mk" name="mk" class="custom-select">
                    <option value="Data Warehouse">Data Warehouse</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
                </select>
            </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label text-right">Nilai</label>
                <div class="col-4">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
        <hr/>

        <?php 
        require_once("classnilai.php");
        //Set Nilai
        $nim = $_POST['nim'];
        $mk = $_POST['mk'];
        $nilai = $_POST['nilai'];

        //Bikin Objek
        $ujian = new nilaiUjian($nim, $mk, $nilai);
        
        // Menampilkan Hasil
        echo "NIM : " . $ujian->nim;
        echo "<br>";
        echo "Pilih Mata Kuliah : " . $ujian->mk;
        echo "<br>";
        echo "Nilai :" . $ujian->nilai;
        echo "<br>";
        echo "Hasil Ujian : " . $ujian->grade;
        echo "<br>";
        echo "Grade : " . $ujian->status;
        echo "<br>";
        ?>
        </div>

        <hr/>

    <div class="footer" style="padding: 15px 0 30px 80px">
        <p style="margin: 0;"><strong>Lab Pemrograman Web Lanjutan</strong></p>
        <p style="margin: 0;">Dosen: Sirojul Munir, S.Si,M.Kom</p>
        <p style="margin: 0;">STT-NF-Kampus B</p>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>