<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/prismjs/themes/prism.css'); ?> ">

<!-- Custom CSS -->
<style>
	#sortable {
		padding: 0;
	}

	#sortable li {
		cursor: move;
		padding: 40px 0px;
		list-style-type: none;
		border-bottom: solid 1px #eee;
		height: 70px;
		display: flex;
		align-items: center;
		margin-bottom: 20px;
	}

	@media (min-width: 576px) {
		.modal-dialog {
			max-width: 800px;
			margin: 1.75rem auto;
		}
	}
</style>

<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/dashboard'); ?>">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="#">Page: Join Us</a></div>
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/page/join-us/list-careers'); ?>">Careers</a></div>
				<div class="breadcrumb-item active">Gallery (Career: <?php echo unserialize($career->title)['th']; ?>)</div>
			</div>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>List of Career Galleries</h4>
							<div class="card-header-action">
								<button class="btn btn-primary" id="btnSort"><i class="fas fa-sort"></i> Sort Images</button>
								<input type="hidden" id="careerId" value="<?php echo $career->id; ?>">
								<a href="<?php echo base_url($lang . '/backoffice/page/join-us/list-career-galleries/create/' . $career->id); ?>" class="btn btn-primary">
									<i class="fas fa-plus"></i> Add
								</a>
							</div>
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
										<th>Img(en)</th>
										<th>Img(th)</th>
										<th>Created at</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php
										$counter = 1;
										foreach ($career_galleries as $career_gallery) { ?>
											<tr>
												<td class="text-center"><?php echo $counter++; ?></td>
												<td><img src="<?php echo base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)['en']); ?>" width="120"></td>
												<td><img src="<?php echo base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)['th']); ?>" width="120"></td>
												<td><?php echo $career_gallery->created_at; ?></td>
												<td>
													<div class="dropdown d-inline">
														<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fas fa-cog"></i> Manage
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item has-icon" href="<?php echo base_url($lang . '/backoffice/page/join-us/list-career-galleries/edit/' . $career_gallery->career_id . '/' . $career_gallery->id); ?>"><i class="far fa-edit"></i> Edit</a>
															<a class="dropdown-item has-icon" onclick="deleteCareerGallery('<?php echo base_url($lang . '/backoffice/page/join-us/list-career-galleries/destroy/' . $career_gallery->id); ?>')"><i class="far fa-trash-alt"></i> Delete</a>
														</div>
													</div>
												</td>
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

<!-- modal content -->
<div id="custom-width-modal" class="modal fade modal-sort-gallery" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="custom-width-modalLabel">Sorting</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="btnSaveSorting">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- JS Libraies -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js'); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('resources/back_end/assets/js/page/modules-datatables.js'); ?>"></script>

<script>
    function reload() {
        setTimeout(function () {
            location.reload()
        }, 1 * 1500)
    }

    function deleteCareerGallery(url) {
        swal({
            title: 'Are you sure ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        success: function (res) {
                            swal({
                                title: 'Success',
                                icon: 'success',
                                button: 'Great!'
                            })

                            reload()
                        },
                        error: function (res) {
                            swal({
                                title: 'Oops...',
                                text: 'Fail',
                                icon: 'error',
                                timer: '1500'
                            })
                        }
                    })
                } else {
                    swal('Cancel')
                }
            })
    }

    $(document).ready(function() {
        $('#btnSort').on('click', function() {

            let $careerId = $('#careerId').val()

            $.ajax({
                type: "POST",
                url: window.base_url + '/' + window.langSite + '/backoffice/page/join-us/list-career-galleries/ajax/get/career-galleries/sort/show/' + $careerId,
                success: function(res) {
                    $('#custom-width-modal .modal-body').html(res.data)
                    $("#custom-width-modal #sortable").sortable({ placeholder: "ui-state-highlight" })
                    $("#custom-width-modal").modal('show')
                },
                error: function() {
                    alert("failure")
                }
            })
        })

        $('#btnSaveSorting').click(function() {

            $(".btnSaveSorting").text("Wait..")
            $('.btnSaveSorting').addClass('disabled')

            let selectedSort = []
            let selectedID = []

            $('#custom-width-modal ul#sortable li').each(function() {
                selectedSort.push($(this).attr("data-sort"))
                selectedID.push($(this).attr("id"))
            })

            $.ajax({
                type: "POST",
                url: window.base_url + '/' + window.langSite + '/backoffice/page/join-us/list-career-galleries/ajax/get/career-galleries/sort/update',
                data: {
                    id: selectedID,
                    sort: selectedSort
                },
                success: function(res) {
                    window.location.reload()
                },
                error: function(){
                    alert("failure")
                }
            })
        })
    })
</script>
