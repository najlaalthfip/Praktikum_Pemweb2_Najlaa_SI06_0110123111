<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Tabel Pegawai</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('admin.header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Pegawai</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Rezwan Anggara</td>
                <td>09/09/1997</td>
                <td>Laki-Laki</td>
                <td>rzwananggara@gmail.com</td>
                <td>Bogor</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Haziyah Anastasia Mentari</td>
                <td>20/06/1999</td>
                <td>Perempuan</td>
                <td>hanastari@gmail.com</td>
                <td>Jakarta</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Aditya Pratama</td>
                <td>13/01/1998</td>
                <td>Laki-Laki</td>
                <td>aditypratama@gmail.com</td>
                <td>Tangerang</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Syakila Askia</td>
                <td>28/11/2000</td>
                <td>Perempuan</td>
                <td>sykilaskia@gmail.com</td>
                <td>Bekasi</td>
                </tr>
            </tbody>
        </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.footer');

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/js/demo.js')}}"></script>
</body>
</html>
