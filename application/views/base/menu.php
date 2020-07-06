<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?php echo base_url('assets/panel/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url('assets/panel/dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?php print_r($this->session->userdata("user")->fullname)?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Yönetim
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('welcome/index')?>" class="nav-link active">
								<i class="far fa-circle nav-icon"></i>
								<p>Profil</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="./index2.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Ayarlar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('welcome/sing_out') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Çıkış Yap</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="<?php echo  base_url('welcome/jobs_page') ?>" class="nav-link">
						<i class="far nav-icon"></i>
						<p>Çalışan Ekle</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('welcome/cash_page') ?>" class="nav-link">
						<i class="far nav-icon"></i>
						<p>Fiyatlandırma</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('welcome/services_page') ?>" class="nav-link">
						<i class="far nav-icon"></i>
						<p>Hizmetler</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('welcome/about_page') ?>" class="nav-link">
						<i class="far nav-icon"></i>
						<p>Hakkımızda</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('welcome/contact_page') ?>" class="nav-link">
						<i class="far nav-icon"></i>
						<p>İletişim</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('welcome/messages_page') ?>" class="nav-link">
						<i class="far nav-icon"></i>
						<p>Mesajlar</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
