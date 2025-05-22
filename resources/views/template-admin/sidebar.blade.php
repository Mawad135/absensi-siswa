<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">  
              <span class="logo-name">ABSENSI SISWA</span>
            </a>
          </div>
          <ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link {{$menu == 'dashboard' ? '' : 'collapsed'}}" href="{{route('dashboard-admin')}}">
    <i class="fas fa-indent"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link {{ $menu == 'siswa' ? '' : 'collapsed' }}" href="{{ route('siswa.index') }}">
      <i class="fas fa-user"></i>
      <span>Siswa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ $menu == 'guru' ? '' : 'collapsed' }}" href="{{ route('guru.index') }}">
      <i class="fas fa-user-graduate"></i>
      <span>Guru</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ $menu == 'local' ? '' : 'collapsed' }}" href="{{ route('local.index') }}">
      <i class="fas fa-home"></i>
      <span>Kelas</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ $menu == 'jurusan' ? '' : 'collapsed' }}" href="{{ route('jurusan.index') }}">
      <i class="fas fa-book"></i>
      <span>Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ $menu == 'ortu' ? '' : 'collapsed' }}" href="{{ route('ortu.index') }}">
      <i class="fas fa-users"></i>
      <span>Orang Tua</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ $menu == 'user' ? '' : 'collapsed' }}" href="{{ route('user.index') }}">
      <i class="fas fa-users"></i>
      <span>User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ $menu == 'absen' ? '' : 'collapsed' }}" href="{{ route('absen.index2') }}">
    <i class="fas fa-calendar-check"></i>
      <span>Absensi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ $menu == 'laporan' ? '' : 'collapsed' }}" href="{{ route('laporan.admin') }}">
    <i class="fas fa-file-alt"></i>
      <span>Laporan</span>
    </a>
  </li>



</ul>
        </aside>
      </div>