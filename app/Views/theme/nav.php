<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="<?= base_url('public/images/logo.png'); ?>" class="mx-1" style="max-width:50px;"
					alt="Logo Sekolah">PPDB Al Firdaus</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?= ($title == "Home PPDB")? "active" : ""; ?>"><a href="<?= base_url('/'); ?>" class="nav-link">Home</a></li>
					<li class="nav-item <?= ($title == "Halaman Daftar")? "active" : ""; ?>"><a href="<?= base_url('/daftar'); ?>" class="nav-link">Daftar</a></li>
					<li class="nav-item <?= ($title == "Seleksi Siswa")? "active" : ""; ?>"><a href="<?= base_url('/seleksi'); ?>" class="nav-link">Seleksi</a></li>
					<li class="nav-item <?= ($title == "Halaman Info")? "active" : ""; ?>"><a href="<?= base_url('/info'); ?>" class="nav-link">Info/Pengumuman</a></li>
					<li class="nav-item <?= ($title == "Halaman Kontak")? "active" : ""; ?>"><a href="<?= base_url('/kontak'); ?>" class="nav-link">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->