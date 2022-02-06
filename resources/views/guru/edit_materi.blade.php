@extends('layout_guru.master')

@section('content')
<div class="main-content">
<h1>Edit Materi</h1> <h4>Kelas VII</h4> <br>

        <section class="section">
          
        <section class="section">
          @foreach ($materi as $m)
               <form action="{{ route('simpanEdit') }}" method="POST">
                   @csrf
                   <input type="hidden" value="{{ $m->id }}" name="id">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Materi</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>BAB</label>
                      <input type="text" class="form-control" name="bab" value="{{ $m->bab }}">
                    </div>
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control" name="judul" value="{{ $m->judul }}">
                    </div>
                    <div class="form-group">
                      <label>Materi</label>
                      <textarea class="form-control " name="materi" >{{ $m->materi }}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi" value="{{ $m->deskripsi }}">
                    </div>
                    <div class="form-group">
                      <label>File</label>
                      <input type="file" class="form-control" name="file" value="{{ $m->file }}">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="reset">Reset</button>
                    <button class="btn btn-success mr-1" type="submit"><i class='fas fa-plus'></i>  Edit Materi</button>
                  </div>
                </div>
                </form>
          @endforeach
@endsection