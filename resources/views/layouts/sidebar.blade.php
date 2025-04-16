<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  @if (Auth::user()->role == 'dokter')
      <li class="nav-item">
        <a href="/dashboard" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/periksa" class="nav-link">
          <i class="nav-icon fas fa-stethoscope"></i>
          <p>Pemeriksaan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/obat" class="nav-link">
          <i class="nav-icon fas fa-pills"></i>
          <p>Obat</p>
        </a>
      </li>
  @elseif (Auth::user()->role == 'pasien')
      <li class="nav-item">
        <a href="/periksa" class="nav-link">
          <i class="nav-icon fas fa-notes-medical"></i>
          <p>Pemeriksaan</p>
        </a>
      </li>
  @endif

  <li class="nav-item">
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
      @csrf
      <button type="submit" class="btn btn-danger btn-block btn-sm">
        <i class="fas fa-sign-out-alt"></i> Logout
      </button>
    </form>
  </li>
</ul>
