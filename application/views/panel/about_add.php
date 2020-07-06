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

			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="card card-outline card-info">
							<?php if($messages!=""): ?>
								<span><?php echo $messages?></span>
							<?php  endif; ?>
							<form action="<?php echo base_url('welcome/about_add')?>" method="post">
							<div class="card-body pad">
										<span><?php echo form_error('example') ?></span>
                						<textarea class="textarea" placeholder="Lütfen Açıklama Girin" name="example" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
										</textarea>
										<button  class="btn btn-dark" type="submit">Güncelle</button>


							</div>
							</form>
						</div>
					</div>
				</div>


			</section>

	</div>

	<?php $this->load->view('base/footer') ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('base/panel_js') ?>
</body>
</html>
