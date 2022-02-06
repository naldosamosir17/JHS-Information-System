@extends('layout.master')

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
                                    @if($data != '')
                                        <a href="{{ route('v_kontrol')}}" class="nav-link nav-link-lg beep text-right"><i class="far fa-envelope"></i></a>
                                    @else 
                                        <a href="#" class="nav-link nav-link-lg text-right"><i class="far fa-envelope"></i></a>
                                    @endif

                                </div>
                                    <div class="card-body">
                                        <h4>Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            
            <div>
                <section class="section">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">  
                                <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                <div>
                                <img alt="image" src="../assets/img/abstract/ppkn.jpg" class="card-icon">
                                    <div class="card-wrap">
                                        <div class="card-body"><a href="{{ route('ppkn')}}">PPKN</a></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                    <section class="section">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                    <div>
                                    <img alt="image" src="../assets/img/abstract/pjok.jpg" class="card-icon">
                                    </div>
                                        <div class="card-wrap">
                                            <div class="card-body"><a href="">PJOK</a></div>
                                        </div>
                                </div>
                            </div>
                    </div>
                    <section class="section">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                    <div>
                                    <img alt="image" src="../assets/img/abstract/pak.jpg" class="card-icon">
                                    </div>
                                        <div class="card-wrap">
                                            <div class="card-body"><a href="">PAK</a></div>
                                        </div>
                                </div>
                            </div>
                    <br>
                    <div>
                <section class="section">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                    <div>
                                    <img alt="image" src="../assets/img/abstract/IPS.jpg" class="card-icon">
                                    </div>
                                        <div class="card-wrap">
                                            <div class="card-body"><a href="">IPS</a></div>
                                        </div>
                                </div>
                            </div>
                    <section class="section">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                    <div>
                                    <img alt="image" src="../assets/img/abstract/IPA.jpg" class="card-icon">
                                    </div>
                                        <div class="card-wrap">
                                            <div class="card-body"><a href="">IPA</a></div>
                                        </div>
                                </div>
                            </div>
                    </div>
                    <section class="section">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                    <div>
                                    <img alt="image" src="../assets/img/abstract/Mtk.jpg" class="card-icon">
                                    </div>
                                        <div class="card-wrap">
                                            <div class="card-body"><a href="">Matematika</a></div>
                                        </div>
                                </div>
                            </div>
                    </div>
</div>
@endsection