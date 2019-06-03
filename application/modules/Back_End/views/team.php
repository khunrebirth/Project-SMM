<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/prismjs/themes/prism.css'); ?> ">

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
                                <a href="#modalAddEditTeam" class="btn btn-primary" onclick="addTeam()" data-toggle="modal">
                                    <i class="fas fa-plus"></i> Add News
                                </a>
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
                                            echo '<td>
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


    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAddEditTeam">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTeamTitle">Modal Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="addEditTeamForm">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" name="body" id="body"></textarea>
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JS Libraies -->
<script src="<?php echo base_url('resources/back-end/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back-end/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back-end/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js'); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('resources/back-end/assets/js/page/modules-datatables.js'); ?>"></script>

<script>
    function reload() {
        setTimeout(function () {
            location.reload()
        }, 1 * 1000)
    }

    function clearForm() {
        $('#modalAddEditTeam form')[0].reset()
    }

    function addTeam() {
        clearForm()
        $('#customerFirstName').val('')
        $('#customerLastName').val('')
        $('#modalCustomerName').text('เพิ่มลูกค้าใหม่')
        $('#btnAddCustomer').text('บันทึก')
    }
    function showTeam(id) {
        $.ajax({
            url: '{{ route('ajax.get.customer.by.id') }}',
            data: {id: id},
            success: function (res) {
                $('#modalShowCustomer').modal('show')
                var html = '<p>' +
                    'ชื่อ: ' + res.data.first_name + '<br>' +
                    'นามสกุล: ' + res.data.last_name + '<br>' +
                    'ชื่อเล่น: ' + res.data.nickname + '<br>' +
                    'รหัสบัตรประชาชน: ' + res.data.idcard + ' <br>' +
                    'เบอร์โทร: ' + res.data.phone + ' <br>' +
                    'ค้างชำระ: ' + res.etc + ' <br>' +
                    '</p>'
                $('#bodyCustomer').html(html)
            }
        })
    }
    function editTeam(id, url) {
        clearForm()
        $.ajax({
            url: '{{ route('ajax.get.customer.by.id') }}',
            data: {id: id},
            success: function (res) {
                $('#modalAddEditCustomer').modal('show')
                $('#modalCustomerName').text('แก้ไขลูกค้า')
                $('#btnAddCustomer').text('อัพเดท')
                $('#customerId').val(res.data.id)
                $('#customerFirstName').val(res.data.first_name)
                $('#customerLastName').val(res.data.last_name)
                $('#customerNickname').val(res.data.nickname)
                $('#customerIdcard').val(res.data.idcard)
                $('#customerPhone').val(res.data.phone)
                $('#customerEmail').val(res.data.email)
                $('#customerId').data('link-to-update', url)
            },
            error: function (res) {
                swal({
                    title: 'Oops...',
                    text: res.message,
                    icon: 'error',
                    timer: '1500'
                })
            }
        })
    }
    function deleteTeam(id, url) {
        swal({
            title: 'คุณต้องการจะลบ ?',
            icon: 'warning',
            button: true,
            dangerMode: true
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        data: {_token: "{{ csrf_token() }}"},
                        success: function (res) {
                            swal({
                                title: res.message,
                                icon: 'success',
                                button: "Great!"
                            })
                            reload()
                        },
                        error: function (res) {
                            swal({
                                title: 'Oops...',
                                text: res.message,
                                icon: 'error',
                                timer: '1500'
                            })
                        }
                    })
                } else {
                    swal('ยกเลิก')
                }
            })
    }
    $(document).ready(function () {
        $('#modalAddEditTeam').on('submit', function (e) {
            e.preventDefault()
            var customerId = $('#customerId').val()
            var url = ''
            var method = ''
            // Case:: Update
            if (customerId != '') {
                url = $('#customerId').data('link-to-update')
                method = 'PATCH'
            }
            // Case:: Insert New
            else {
                url = '{{ route('customers.store') }}'
                method = 'POST'
            }
            $.ajax({
                type: method,
                url: url,
                data: {
                    _token: "{{ csrf_token() }}",
                    customer_first_name: $('#customerFirstName').val(),
                    customer_last_name: $('#customerLastName').val(),
                    customer_nickname: $('#customerNickname').val(),
                    customer_idcard: $('#customerIdcard').val(),
                    customer_phone: $('#customerPhone').val(),
                    customer_email: $('#customerEmail').val()
                },
                success: function (res) {
                    $('#modalAddEditCustomer').modal('hide')
                    swal({
                        title: res.message,
                        icon: 'success',
                        button: "Great!"
                    })
                    reload()
                },
                error: function (res) {
                    swal({
                        title: 'Oops...',
                        text: res.message,
                        icon: 'error',
                        timer: '1500'
                    })
                }
            })
        })
    })
</script>
