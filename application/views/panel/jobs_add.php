<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Dashboard</title>

	<!-- Google Font: Source Sans Pro -->

	<!-- Font Awesome -->
	<?php $this->load->view('base/panel_css')?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


	<?php $this->load->view('base/menu') ?>

	<div class="content-wrapper">
		<?php if($update=0): ?>
		<form action="<?php echo base_url('welcome/jobs_add') ?>" method="post" enctype="multipart/form-data" >
			<div class="card-body">
				<div class="form-group">
					<label for="exampleInputEmail1">İş Yerindeki Konumu</label>
					<input type="text" class="form-control" name="status" placeholder="Konumu">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tam Adını Girin</label>
					<input type="text" class="form-control" name="name" placeholder="Ad Soyad">
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Resim Yükleyin</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="upload">
							<label class="custom-file-label" for="exampleInputFile">Resim Seç</label>
						</div>
					</div>
				</div>
				<input type="submit" class="btn btn-dark">
			</div>
			<!-- /.card-body -->

		</form>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Çalışanlar</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Ad Soyad</th>
								<th>Statü</th>
								<th>Resim</th>
								<th></th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($jobs as $job){?>
								<tr>
									<td><?php echo $job->jobsname?></td>
									<td><?php echo $job->status?></td>
									<td><img src=" <?php echo base_url( 'uploads/'.$job->images)?>" style="height:60px"></td>
									<td><button type="submit"  class="btn btn-dark" ><a href="<?php echo base_url('welcome/jobs_page/'.$job->id) ?>"
																						style="color: white">Güncelle</a></button> </td>

								</tr>
							<?php } ?>
							</tbody>

						</table>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
			<!-- /.col -->
		</div>
		<?php endif;?>
		<?php if($update=1): ?>
			<form action="<?php echo base_url('welcome/jobs_update') ?>" method="post" enctype="multipart/form-data" >
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">İş Yerindeki Konumu</label>
						<input type="text" class="form-control" name="status" placeholder="<?php echo $jobs[0]->status ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Tam Adını Girin</label>
						<input type="text" class="form-control" name="name" placeholder="<?php echo $jobs[0]->jobsname ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Resim Yükleyin</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="upload">
								<label class="custom-file-label" for="exampleInputFile"><?php echo $jobs[0]->images ?></label>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-dark">Güncelle</button>
				</div>
				<!-- /.card-body -->

			</form>
		<?php endif;?>
	</div>

	<?php $this->load->view('base/footer') ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('base/panel_js')?>
</body>
</html>
