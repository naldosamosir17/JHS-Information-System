@extends('layout_guru.master')

@section('content')
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kelas VII</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="dashboard">Dashboard / Materi Guru</a></div>
            </div>

            <div class="section-body">
                
    </div>
</div>
@foreach ($show as $s)
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $s->bab }}</h4>
            <h4 class="card-title">{{ $s->judul }}</h4>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $s->deskripsi }}</p>
            
        </div>
    </div>
</div>
@endsection    