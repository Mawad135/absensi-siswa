<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">  
              <span class="logo-name">ABSENSI SISWA</span>
            </a>
          </div>
          <ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link {{$menu == 'dashboard' ? '' : 'collapsed'}}" href="{{route('dashboard-guru')}}">
    <i class="fas fa-indent"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link {{ $menu == 'absen' ? '' : 'collapsed' }}" href="{{ route('absen.index3') }}">
    <i class="fas fa-calendar-check"></i>
      <span>Absensi</span>
    </a>
  </li>
</ul>
        </aside>
      </div>