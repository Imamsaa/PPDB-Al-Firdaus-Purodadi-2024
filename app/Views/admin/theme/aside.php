<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('public/admin/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi PPDB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('public/admin/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Imam Safii</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('/sekolah'); ?>" class="nav-link <?= ($title == 'Beranda')?'active':''; ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-header">PANITIA</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Seleksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/siswa'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Seleksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/terima'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Diterima</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/tolak'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Ditolak</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/sekolah'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penghasilan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/upload'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keterangan Upload</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/program'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program Unggulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/info');; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informasi PPDB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/pengumuman'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/alumni'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimoni Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/gallery'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/sekolah/laporan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/sekolah/panitia'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Panitia
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/sekolah/pesan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>
                Pesan
              </p>
            </a>
          </li>
          <li class="nav-header">KEUANGAN</li>
          <li class="nav-item">
            <a href="<?= base_url('/sekolah/pembayaran'); ?>" class="nav-link <?= ($title == 'Pembayaran')?'active':''; ?>">
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/sekolah/pesan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>
                Pesan
              </p>
            </a>
          </li>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('/sekolah/whastapp'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>WhastApp</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/sekolah/akun'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Akun
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>