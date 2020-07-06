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
		<form method="post" action="<?php echo base_url('welcome/contact_add') ?>">
			<div class="card-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Harita İçin İframe Kodunu Yazın</label>
					<input type="text" class="form-control" name="iframe"  >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Telefon Numaranız</label>
					<input type="text" class="form-control" name="phone" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email Adresiniz</label>
					<input type="text" class="form-control"  name="email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email Açıklaması</label>
					<input type="text" class="form-control" name="emailtext">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Hizmet Verdiğiniz Ülke</label>
					<input type="text" class="form-control" name="country" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">İl / İlçe</label>
					<input type="text" class="form-control" name="location">
				</div>

			</div>
			<!-- /.card-body -->

			<div class="card-footer">
				<button type="submit" class="btn btn-dark">Güncelle</button>
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
