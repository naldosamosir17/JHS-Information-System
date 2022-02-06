
@extends('layout_guru.master')

@section('content')
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Akun Murid</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="dashboard">Tambah Materi</a></div>
            </div>

            <div class="section-body">                
    </div>
    </div>
    <div class="row">
              <div class="col-12">
               <form action="{{ url('pengumuman') }}" method="POST">
                   @csrf
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Murid</h4>
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                      <label>Tempat / Tanggal Lahir</label>
                      <input type="text" class="form-control" name="kelahiran">
                    </div>
                    <div class="form-group">
                      <label>NISN</label>
                      <input type="text" class="form-control" name="nisn">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <input type="text" class="form-control" name="agama">
                    </div>
                    <div class="form-group">
                      <label>Golongan Darah</label>
                      <input type="text" class="form-control" name="goldar">
                    </div>
                    <div class="form-group">
                      <label>Kabupaten</label>
                      <input type="text" class="form-control" name="kabupaten">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                      <label>No. HP</label>
                      <input type="text" class="form-control" name="nomor">
                    </div>
                    <div class="form-group">
                      <label class="d-block">Jenis Kelamin</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Pria
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                          Wanita
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Kelas</label>
                      <input type="text" class="form-control" name="kelas">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                      <label>Konfirmasi Password</label>
                      <input type="text" class="form-control" name="konf-password">
                    </div>

                    <div class="form-group">
                      <label>Upload Gambar</label>
                      <input type="file" class="form-control" name="file">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                </form>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>

@endsection
