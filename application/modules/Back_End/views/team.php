<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Item: Teams</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Manage Item</a></div>
                <div class="breadcrumb-item">Teams</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List of Teams</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Add News</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Picture</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $counter  = 1;
                                        foreach ($teams as $team) {
                                            echo '<tr>';
                                            echo '<td>' . $counter++ . '</td>';
                                            echo '<td>' . $team->title . '</td>';
                                            echo '<td>' . $team->body . '</td>';
                                            echo '<td>' . '<img alt="image" src=' . base_url('storage/images/' . $team->image) . ' width="45">' . '</td>';
                                            echo '<td><a href=' . base_url('backoffice/team') . ' class="btn btn-info"><i class="fas fa-eye"></i> See</a>
                                                      <a href=' . base_url('backoffice/team') . ' class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                                      <a href=' . base_url('backoffice/team') . ' class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                                  </td>';
                                             echo '</tr>';
                                        }
                                    ?>
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
<script src="<?php echo base_url('resources/back-end/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back-end/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back-end/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js'); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('resources/back-end/assets/js/page/modules-datatables.js'); ?>"></script>