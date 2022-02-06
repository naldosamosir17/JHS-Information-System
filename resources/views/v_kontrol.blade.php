@extends('layout.master')

@section('content')
<?php
    $uri = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
?>
<div class="main-content"><br>
<div class="col-12 col-sm-6 col-lg-8" >
                <div class="card chat-box card-success" id="mychatbox2">
                <div class="fb-comments" data-href="{{ $uri }} " data-numposts="5" data-width=""></div>
                </div>
              </div>
              <div class="card">
                  <div class="card-header">
                    <h4>Who's Online?</h4>
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
@endsection