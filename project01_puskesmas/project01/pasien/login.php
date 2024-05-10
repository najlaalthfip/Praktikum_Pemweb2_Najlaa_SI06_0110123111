<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="../project01/dist/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../project01/dist/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../project01/dist/css/style.css">
    <title>Login Admin E-Puskesmas</title>
</head>
<body>
<!--? Header Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 20px;">
  <div class="collapse navbar-collapse" id="navbarText">
    <a href="../puskesmas/index.html"><button class="btn btn-outline-primary" type="button"><-- Kembali ke Beranda</button></a>
    
  </div>
</nav>
<!-- Header End -->


<div class="content">
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <!-- Gambar login -->
                <img src="../project01/dist/img/login.png" alt="Image" class="img-fluid" style="width: 900px; height:450px; padding: 0 20px 0 0;">
            </div>
            <div class="col-md-7">
                <div class="row justify-content-left">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Semangat Pagi!</h3>
                            <p class="mb-4">Silahkan masukkan username dan password untuk masuk sebagai admin E-Puskesmas</p>
                        </div>
                        <form id="loginForm" action="#" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox">
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                            </div>
                            <input type="submit" value="Log In" class="btn btn-block btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Mencegah form submit secara default

        // Ambil nilai username dan password dari form
        const username = document.querySelector('input[name="username"]').value;
        const password = document.querySelector('input[name="password"]').value;

        // Validasi login
        if (username === 'najlaaadmin' && password === 'najlaa123') {
            window.location.href = '../project01/home.php';
        } else {
            alert('Login gagal. Coba lagi.');
        }

        return false;
    });
</script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
