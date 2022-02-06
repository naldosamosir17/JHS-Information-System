@extends('layout_guru.master')

@section('content')
<div class="main-content">
<div class="col-12 col-md-12 col-lg-12">

    <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Teori</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Kuis</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Kontrol Siswa</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                      @foreach ($materi as $m)

                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">BAB {{ $m->bab }}</h4>
                                
                            </div>
                            <div class="card-body">
                            <h4 class="card-title">{{ $m->judul }}</h4>
                                
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('edit_materi', $m->id)}}" class="btn btn-primary">Update</a>
                                <a href="{{ url('/deleteMateri', $m->id)}}" class="btn btn-danger">Delete</a>
                            </div>
                                
                        </div>
                        </div>


                        @endforeach
                        <div class="text-right">
                            <a href="{{ route('add_materi')}}"><div class="btn btn-success"><i class='fas fa-plus'></i>  Tambah Materi </div></a>
                        </div>
                      </div>
                        

                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                        Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui.
                      </div>
                      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                      <form action="{{ url('Kelas') }}" method="POST">
                            @csrf
                            <div class="card">
                            <div class="card-header">
                                <h4>Buat Ruang Kelas</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                <label>Nama Ruang Kelas</label>
                                <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                <label>Maksimum Peserta</label>
                                <input type="text" class="form-control" name="peserta">
                                </div>
                                <div class="form-group">
                                <label>Waktu</label>
                                <input type="time" class="form-control" name="waktu">
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="reset">Reset</button>
                                <button class="btn btn-success mr-1" type="submit"> Kirim Undangan</button>
                            </div>
                            </div>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>
</div>
    

</div>



@endsection