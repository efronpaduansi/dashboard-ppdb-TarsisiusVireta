 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('admin/dashboard') ?>" class="brand-link">
      <img src="<?=base_url('assets/'); ?>img/tv_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PPDB TARSISIUS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url('admin/dashboard') ?>" <?=$this->uri->segment(2) == 'dashboard' ? 'class="nav-link active"' : 'class="nav-link"' ?> >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MASTER MENU</li>
          <li class="nav-item">
            <a href="<?=base_url('admin/pendaftaran'); ?>" <?=$this->uri->segment(2) == 'pendaftaran' ? 'class="nav-link active"' : 'class="nav-link"' ?> >
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pendaftaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('admin/kelas'); ?>" <?=$this->uri->segment(2) == 'kelas' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('admin/jurusan'); ?>" <?=$this->uri->segment(2) == 'jurusan' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Jurusan
              </p>
            </a>
          </li>
          <li class="nav-header">PREFERENCES</li>
          <li class="nav-item">
            <a href="<?=base_url('admin/profile'); ?>" <?=$this->uri->segment(2) == 'profile' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
              <i class="nav-icon fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('admin/users'); ?>" <?=$this->uri->segment(2) == 'users' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" <?=$this->uri->segment(2) == 'setting' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
              <i class="nav-icon fas fa-cog"></i>
              <p>Setting</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>