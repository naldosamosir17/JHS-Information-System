@extends('layout_guru.master')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="card card-statistic-2">
                <img alt="image" src="../assets/img/abstract/Dashoard1.jpeg" width="1220" height="230" class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-book-open"></i>
                        </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Junior High School Information System</h4>
                                </div>
                                    <div class="card-body">
                                        <h4>Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
              <div class="col-12 col-md-4 col-lg-4">    
                <div class="card card-primary">
                  <div class="card-header d">
                    <h4>Kelas VII</h4>
                  </div>
                  <div class="card-body">
                    Pendidikan Pancasila dan Kewarganegaraan
                  </div>
                  <div class="card-footer text-right">
                  <a href="{{ route('akses') }}"><button class="btn btn-primary">Akses</button></a>
                  </div>
                </div>
            </div>
                
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card card-warning">
                  <div class="card-header">
                    <h4>Kelas VIII</h4>
                  </div>
                  <div class="card-body">
                    Pendidikan Pancasila dan Kewarganegaraan
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary">Akses</button>
                  </div>
                </div>
              </div>
            

            <div class="col-12 col-md-4 col-lg-4">
               <div class="card card-danger">
                  <div class="card-header">
                    <h4>Kelas IX</h4>
                  </div>
                  <div class="card-body">
                    Pendidikan Kewarganegaraan
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary">Akses</button>
                  </div>
                </div>
              </div>
            </div>      

@endsection
