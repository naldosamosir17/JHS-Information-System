@extends('layout.master')

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
                                
                        </div>
                    </div>

                    @endforeach

                </div>
                            
                    </div>
                    </div>
@endsection