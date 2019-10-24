<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/prismjs/themes/prism.css'); ?> ">

<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/dashboard'); ?>">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="#">Settings</a></div>
				<div class="breadcrumb-item active">Banner</div>
			</div>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>List of Banners</h4>
						</div>
						<div class="card-body">

							<?php if ($this->session->flashdata('success')) { ?>
								<div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
							<?php } ?>
							<?php if ($this->session->flashdata('error')) { ?>
								<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
							<?php } ?>

							<div class="table-responsive">
								<table class="table table-striped" id="table-1">
									<thead>
									<tr>
										<th class="text-center">#</th>
										<th>Page(en)</th>
										<th>Page(th)</th>
										<th>Image(en)</th>
										<th>Image(th)</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php
										$counter = 1;
										foreach ($banners as $banner) { ?>
											<tr>
												<td class="text-center"><?php echo $counter++; ?></td>
												<td><?php echo unserialize($banner->page)['en']; ?></td>
												<td><?php echo unserialize($banner->page)['th']; ?></td>
												<td><img src="<?php echo base_url('storage/uploads/images/banners/' . unserialize($banner->img)['en']); ?>" width="120"></td>
												<td><img src="<?php echo base_url('storage/uploads/images/banners/' . unserialize($banner->img)['th']); ?>" width="120"></td>
												<td><a href="<?php echo base_url($lang . '/backoffice/setting/banners/edit/' . $banner->id); ?>" class="btn btn-warning">Edit</a></td>
											</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- JS Libraies -->
<script src="<?php echo base_url('resources/back_end/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js'); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('resources/back_end/assets/js/page/modules-datatables.js'); ?>"></script>

<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/vfs_fonts.js'); ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
