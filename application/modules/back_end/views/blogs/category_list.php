<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/prismjs/themes/prism.css'); ?> ">
<link href="<?php echo base_url('resources/back_end/assets/css/notiny.min.css'); ?>" rel="stylesheet">

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
				<div class="breadcrumb-item"><a href="#">Page: Blogs</a></div>
				<div class="breadcrumb-item active">Category</div>
			</div>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>List of Category</h4>
							<div class="card-header-action">
								<button class="btn btn-primary" id="btnSort"><i class="fas fa-sort"></i> Sort</button>
								<a href="<?php echo base_url($lang . '/backoffice/page/blogs/list-category-blogs/create'); ?>" class="btn btn-primary">
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
								<table class="table table-striped" id="ssmDataTable">
									<thead>
									<tr>
										<th class="text-center">#</th>
										<th>Status</th>
										<th>Icon(en)</th>
										<th>Icon(th)</th>
										<th>Title(en)</th>
										<th>Title(th)</th>
										<th>Created at</th>
										<th>Items</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php
										$counter = 1;
										foreach ($categories as $category) { ?>
											<tr>
												<td class="text-center"><?php echo $counter++; ?></td>
												<td>
													<label class="custom-switch p-0">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input cbToggleStatus" data-id="<?php echo $category->id; ?>" <?php if ($category->status == 'Y') { echo 'checked'; } else { echo ''; } ?>>
														<span class="custom-switch-indicator"></span>
													</label>
												</td>
												<td><img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($category->icon)['en']); ?>" width="40"></td>
												<td><img src="<?php echo base_url('storage/uploads/images/blogs/' . unserialize($category->icon)['th']); ?>" width="40"></td>
												<td><?php echo unserialize($category->title)['en']; ?></td>
												<td><?php echo unserialize($category->title)['th']; ?></td>
												<td><?php echo $category->created_at; ?></td>
												<td>
													<a class="btn btn-warning" href="<?php echo base_url($lang . '/backoffice/page/blogs/list-blogs/' . $category->id); ?>"><i class="far fa-view"></i> Items (<?php echo $category->counter; ?>)</a>
												</td>
												<td>
													<div class="dropdown d-inline">
														<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fas fa-cog"></i> Manage
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item has-icon" href="<?php echo base_url($lang . '/backoffice/page/blogs/list-category-blogs/edit/' . $category->id); ?>"><i class="far fa-edit"></i> Edit</a>
															<a class="dropdown-item has-icon" onclick="deleteCategory('<?php echo base_url($lang . '/backoffice/page/blogs/list-category-blogs/destroy/' . $category->id); ?>')"><i class="far fa-trash-alt"></i> Delete</a>
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

<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/vfs_fonts.js'); ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/notiny.min.js'); ?>"></script>

<script>
    function reload() {
        setTimeout(function () {
            location.reload()
        }, 1 * 1500)
    }

    function deleteCategory(url) {
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

    function notify(event, message) {

        let eventResponse = ''

        switch (event) {
            case 'success':
                eventResponse = 'success'
                break

            case 'warning':
                eventResponse = 'warning'
                break

            case 'error':
                eventResponse = 'error'
                break

            default:
                eventResponse = 'error'
        }

        $.notiny({ text: message, image: 'https://cdn2.iconfinder.com/data/icons/meeting-11/64/alarm-remind-bell-reminder-ring-512.png' });
    }

    $(document).ready(function() {
        $('.cbToggleStatus').on('click', function() {

            let $data = {
                id: $(this).attr('data-id'),
                status: this.checked == false ? 'N' : 'Y',
                table: 'blog_categories'
            }

            $.ajax({
                type: "POST",
                url: window.base_url + '/' + window.langSite + '/backoffice/helper/change/status',
                data: $data,
                success: function(res) {
                    setTimeout(function () {
                        location.reload()
                    }, 1 * 2000)

                    notify('success', 'Save Change Successfully')
                },
                error: function() {
                    alert("failure")
                }
            })

        })

        $('#btnSort').on('click', function() {

            $.ajax({
                type: "POST",
                url: window.base_url + '/' + window.langSite + '/backoffice/page/blogs/list-category-blogs/ajax/get/category-blogs/sort/show',
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
                url: window.base_url + '/' + window.langSite + '/backoffice/page/blogs/list-category-blogs/ajax/get/category-blogs/sort/update',
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
