@extends('layout_guru.master')

@section('content')

<div class="main-content">
        <div class="row">
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
