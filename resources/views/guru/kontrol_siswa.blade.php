@extends('layout_guru.master')

@section('content')
<?php
    $uri = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
?>
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
                      <li class="nav-item">
                        <a class="nav-link" id="diskusi-tab3" data-toggle="tab" href="#diskusi3" role="tab" aria-controls="diskusi" aria-selected="false">Diskusi</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                      
                        <div class="text-right">
                            <a href="{{ route('add_materi')}}"><div class="btn btn-success"><i class='fas fa-plus'></i>  Tambah Materi </div></a>
                        </div>
                      </div>
                        

                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                        Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui.
                      </div>
                      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                      @foreach ($kontrol as $k)

                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ $k->nama }}</h4>
                                
                            </div>
                            <div class="card-body">
                            <h4 class="card-title">{{ $k->peserta }}</h4>
                                
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('editUndangan', $k->id)}}" class="btn btn-primary">Update</a>
                                <a href="{{ url('/deleteUndangan', $k->id)}}" class="btn btn-danger">Delete</a>
                            </div>
                                
                        </div>
                        
                        </div>
                        <div class="tab-pane fade" id="diskusi3" role="tabpanel" aria-labelledby="diskusi-tab3">
                        <div class="fb-comments" data-href="{{ $uri }} " data-numposts="5" data-width=""></div>
                          
<div class="col-12 col-sm-6 col-lg-8" >
                <div class="card chat-box card-success" id="mychatbox2">
                  <div class="card-header">
                    <h4><i class="fas fa-circle text-success mr-2" title="" data-toggle="tooltip" data-original-title="Online"></i> Diskusi </h4>
                  </div>
                  <div class="card-body chat-content" tabindex="3" style="overflow: hidden; outline: none;">
                  <div class="chat-item chat-left" style=""><img src="../assets/img/avatar/avatar-5.png"><div class="chat-details"><div class="chat-text">Selamat pagi</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-right" style=""><img src="../assets/img/avatar/avatar-2.png"><div class="chat-details"><div class="chat-text">Selamat pagi</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-left" style=""><img src="../assets/img/avatar/avatar-5.png"><div class="chat-details"><div class="chat-text">Saya ingin bertanya mengenai hakekat pancasila</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-right" style=""><img src="../assets/img/avatar/avatar-2.png"><div class="chat-details"><div class="chat-text">saya juga belum mengerti</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-left" style=""><img src="../assets/img/avatar/avatar-5.png"><div class="chat-details"><div class="chat-text">Mari kita tanyakan kepada bapak tersebut</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-right" style=""><img src="../assets/img/avatar/avatar-2.png"><div class="chat-details"><div class="chat-text">maaf saya tidak mengerti</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-left" style=""><img src="../assets/img/avatar/avatar-5.png"><div class="chat-details"><div class="chat-text">Kalau tentang Dasar pancasila ?</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-right" style=""><img src="../assets/img/avatar/avatar-2.png"><div class="chat-details"><div class="chat-text">-__________________-</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-left" style=""><img src="../assets/img/avatar/avatar-5.png"><div class="chat-details"><div class="chat-text">...</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-right" style=""><img src="../assets/img/avatar/avatar-2.png"><div class="chat-details"><div class="chat-text">Selamat Pagi</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-right" style=""><img src="../assets/img/avatar/avatar-2.png"><div class="chat-details"><div class="chat-text">Selamat siang pak</div><div class="chat-time">06:53</div></div></div><div class="chat-item chat-right" style=""><img src="../assets/img/avatar/avatar-2.png"><div class="chat-details"><div class="chat-text"><i>You have blocked Dwiky</i></div><div class="chat-time">06:53</div></div></div></div>
                  <div class="card-footer chat-form">
                    <form id="chat-form2">
                      <input type="text" class="form-control" placeholder="Type a message">
                      <button class="btn btn-primary">
                        <i class="far fa-paper-plane"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card">
                  <div class="card-header">
                    <h4>User Status</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold">Hasan Basri</div>
                          <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                        </div>
                      </li>
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold">Bagus Dwi Cahya</div>
                          <div class="text-small font-weight-600 text-muted"><i class="fas fa-circle"></i> Offline</div>
                        </div>
                      </li>
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold">Wildan Ahdian</div>
                          <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                        </div>
                      </li>
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold">Rizal Fakhri</div>
                          <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                        </div>


                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
</div>
    

</div>



@endsection