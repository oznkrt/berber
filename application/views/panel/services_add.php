<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Dashboard</title>

	<!-- Google Font: Source Sans Pro -->

	<!-- Font Awesome -->
	<?php $this->load->view('base/panel_css') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


	<?php $this->load->view('base/menu') ?>
	<div class="content-wrapper">
		<form method="post" action="<?php echo base_url('welcome/services_add') ?>">
			<div class="card-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Hizmetiniz</label>
					<input type="text" class="form-control" name="makename" placeholder="Hizmetiniz">
					<span><?php echo form_error('makename') ?></span>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Hizmet Açıklaması</label>
					<input type="text" class="form-control" name="explant" placeholder="Açıklama">
					<span><?php echo form_error('explant') ?></span>
				</div>

			</div>
			<!-- /.card-body -->

			<div class="card-footer">
				<button type="submit" class="btn btn-dark">Ekle</button>
			</div>
		</form>
	</div>

	<?php $this->load->view('base/footer') ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('base/panel_js') ?>
</body>
</html>
