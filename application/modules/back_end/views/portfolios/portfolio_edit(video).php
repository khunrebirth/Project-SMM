<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/prismjs/themes/prism.css'); ?> ">

<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit: <?php echo unserialize($portfolio->title)['th']; ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/dashboard'); ?>">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="#">Page: Clients</a></div>
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/page/clients/list-category-clients'); ?>">Categories</a></div>
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/page/clients/list-clients/' . $category->id); ?>">Blogs (Category: <?php echo unserialize($category->title)['th']; ?>)</a></div>
				<div class="breadcrumb-item active">Edit</div>
			</div>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<?php if ($this->session->flashdata('success')) { ?>
								<div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
							<?php } ?>
							<?php if ($this->session->flashdata('error')) { ?>
								<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
							<?php } ?>

							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#handleTh">TH</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#handleEn">EN</a></li>
							</ul>
							<!-- Tab panes -->
							<form class="form-horizontal" method="post" action="<?php echo base_url($lang . '/backoffice/page/portfolios/list-portfolios/update/' . $category->id . '/' . $portfolio->id); ?>" enctype="multipart/form-data">
								<div class="tab-content">
									<div class="tab-pane active" id="handleTh">
										<!-- Information -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Information</h4></div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span> Sort Url</label>
											<div class="col-sm-10">
												<input class="form-control input-file-w-30" name="sort_url_th" placeholder="Sort Url" type="text" value="<?php echo unserialize($portfolio->image)['th']; ?>">
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Text</label>
											<div class="col-sm-10">
												<input class="form-control input-file-w-30" name="text_th" placeholder="Text" type="text" value="<?php echo unserialize($portfolio->text)['th']; ?>">
											</div>
										</div>
										<hr>
									</div>
									<div class="tab-pane fade" id="handleEn">
										<!-- Information -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Information</h4></div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span> Sort Url</label>
											<div class="col-sm-10">
												<input class="form-control input-file-w-30" name="sort_url_en" placeholder="Sort Url" type="text" value="<?php echo unserialize($portfolio->image)['en']; ?>">
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Text</label>
											<div class="col-sm-10">
												<input class="form-control input-file-w-30" name="text_en" placeholder="Text" type="text" value="<?php echo unserialize($portfolio->text)['en']; ?>">
											</div>
										</div>
										<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 text-left text-md-right">
										<button class="btn btn-primary">Save Changes</button>
									</div>
								</div>
							</form>
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

<script>
    function PreviewImage(input, previewImage) {
        if (input.files && input.files[0]) {
            var reader = new FileReader()

            reader.onload = function (e) {
                $('#' + previewImage).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
