@extends('layout_guru.master')

@section('content')
<div class="main-content">
<h1>Tambah Materi Pembelajaran</h1> <h4>Kelas VII</h4> <br>

        <section class="section">
          
        <section class="section">
               <form action="{{ url('pembelajarans') }}" method="POST">
                   @csrf
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Materi</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>BAB</label>
                      <input type="text" class="form-control" name="bab">
                    </div>
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                      <label>Materi</label>
                      <textarea class="form-control " name="materi"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi">
                    </div>
                    <div class="form-group">
                      <label>File</label>
                      <input type="file" class="form-control" name="file">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="reset">Reset</button>
                    <button class="btn btn-success mr-1" type="submit"><i class='fas fa-plus'></i>  Tambah Materi</button>
                  </div>
                </div>
                </form>
@endsection