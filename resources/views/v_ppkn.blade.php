@extends('layout.master')

@section('content')

<div class="main-content">
    <section class="section"><br><br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card"><br>
                <div class="card-header">
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Teori</a>
                      <a href="#" class="btn">Kuis</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="list-group">
                      <a href="{{ route('ppkn')}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">BAB 1</h5>
                        </div>
                        <p class="mb-1">HARMONISASI HAK DAN KEWAJIBAN ASASI MANUSIA DALAM PERSPEKTIF PANCASILA</p>
                        <small>Donec id elit non mi porta.</small>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                      </a>
                    </div>
                  </div>
                

@endsection