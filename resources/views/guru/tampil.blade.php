@extends('layout_guru.master')

@section('content')
<div class="main-content">
        <div class="row">
              <div class="col-12 col-md-4 col-lg-4">    
                <div class="card card-primary">
                  <div class="card-header d">

                    @foreach ($materi as $m)
                    <h4>Bab {{ $m->bab}} </h4>
                  </div>
                  <div class="card-body">
                    {{ $m->judul}}
                  </div>
                  <div class="card-footer text-right">
                  <a href="{{ route('akses') }}"><button class="btn btn-primary">Akses</button></a>
                  </div>
                </div>
            </div>


@endsection