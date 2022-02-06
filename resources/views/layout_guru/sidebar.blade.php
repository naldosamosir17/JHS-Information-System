<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <br><img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1" width="120px"> <br/>
        <ul class="sidebar-menu">
        <li><div>Khorul Noifa</div></li>
        <li><div class="d-sm-none d-lg-inline-block">Guru</div></li>
        </ul>  
    </div>
    
      <ul class="sidebar-menu"><br>
          <li><a href="dashboard" class="nav-link" ><i class='fas fa-th-large'></i><span>Dashboard</span></a></li>
          <li><a href="materi" class="nav-link" ><i class='far fa-clock'></i><span>Jadwal Pembelajaran</span></a></li>
          <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Kelas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('akses') }}">Kelas VII</a></li>
                  <li><a class="nav-link " href="#">Kelas VIII</a></li>
                  <li><a class="nav-link" href="#">Kelas IX</a></li>
                </ul>
          <li><a href="{{ route('pengumuman')}}" class="nav-link" ><i class='fas fa-bullhorn'></i><span>Pengumuman</span></a></li>
          
    </aside>
  </div>