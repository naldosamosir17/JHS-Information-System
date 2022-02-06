@extends('layout_guru.master')

@section('content')
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Pengumuman</h1>
            <div class="section-header-breadcrumb">
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
                    <h4>Tambah Pengumuman</h4>
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                      <label>Isi</label>
                      <textarea class="form-control " name="materi"></textarea>
                    </div>
                    <div class="form-group">
                      <label>File</label>
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
