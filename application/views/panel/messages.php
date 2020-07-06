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
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Mesajlar</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>İd</th>
								<th>Ad</th>
								<th>Email</th>
								<th>Konu</th>
								<th>Mesaj</th>
								<th></th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($messages as $message){?>
							<tr>
								<td><?php echo $message->id?></td>
								<td><?php echo $message->name?></td>
								<td><?php echo $message->email?></td>
								<td><?php echo $message->subjet ?></td>
								<td><?php echo $message->message?></td>
								<td><button type="submit"  class="btn btn-dark" ><a href="<?php echo base_url('welcome/message_chache/'.$message->id)?>"
										style="color: white">sil</a></button> </td>

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
	</div>

	<?php $this->load->view('base/footer') ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('base/panel_css')?>
</body>
</html>
