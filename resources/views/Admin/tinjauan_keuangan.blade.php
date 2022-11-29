@extends ('admin.master')

@section ('head')
<title>Admin BPR Guna Yatra - Tinjauan Keuangan </title>

@endsection

@section ('konten')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Tinjauan Keuangan</h1>
    <p class="mb-4">Halaman ini berisi tinjauan keuangan tiap periode dengan memasukkan data asset, kredit, dpk, dan
        laba.</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Data Tinjauan Keuangan</h6>
        </div>
        <div class="card-body">
            <div align="right">
                <button type="button" name="create_tinjauan_keuangan" id="create_tinjauan_keuangan"
                    class="btn btn-success btn-sm">Tambah Tinjauan Keuangan</button>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tinjauan_keuangan_table" width="100%">
                    <thead>
                        <tr>
                            <th>Periode</th>
                            <th>Asset(Juta)</th>
                            <th>Kredit(Juta)</th>
                            <th>DPK(Juta)</th>
                            <th>Laba(Juta)</th>
                            <th>Aksi </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Periode</th>
                            <th>Asset(Juta)</th>
                            <th>Kredit(Juta)</th>
                            <th>DPK(Juta)</th>
                            <th>Laba(Juta)</th>
                            <th>Aksi </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="formModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                        <button type="button" name="cancel_button" id="cancel_button" class="close"
                            data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <span id="form_result"></span>
                        <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-12">Periode: </label>
                                <div class="col-md-12">
                                    <input type="month" name="periode" id="periode" class="form-control"
                                        placeholder="Pilih Periode" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Asset(dalam juta): </label>
                                <div class="col-md-12">
                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                        name="asset" id="asset" class="form-control"
                                        placeholder="Masukkan Jumlah Asset" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Kredit(dalam juta): </label>
                                <div class="col-md-12">
                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                        name="kredit" id="kredit" class="form-control"
                                        placeholder="Masukkan Jumlah Kredit" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">DPK(dalam juta): </label>
                                <div class="col-md-12">
                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                        name="dpk" id="dpk" class="form-control" placeholder="Masukkan Jumlah DPK" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Laba(dalam juta): </label>
                                <div class="col-md-12">
                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                        name="laba" id="laba" class="form-control" placeholder="Masukkan Jumlah Laba" />
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="hidden" name="action" id="action" />
                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                <button type="button" name="cancel_button" id="cancel_button"
                                    class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                                <input type="submit" name="action_button" id="action_button"
                                    class="btn btn-primary btn-sm" value="Kirim" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="confirmModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <a align="center" style="margin:0;">Anda Yakin Ingin Menghapus Data Ini?</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" name="cancel_button" id="cancel_button" class="btn btn-secondary btn-sm"
                            data-dismiss="modal">Batal</button>
                        <button type="button" name="ok_button" id="ok_button"
                            class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var asset = document.getElementById('asset');
            asset.addEventListener('keyup', function (e) {
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                asset.value = formatRupiah(this.value);
            });

            function formatRupiah(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    asset = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    asset += separator + ribuan.join('.');
                }
                asset = split[1] != undefined ? asset + ',' + split[1] : asset;
                return prefix == undefined ? asset : (asset ? asset : '');
            }

        </script>
        <script>
            var kredit = document.getElementById('kredit');
            kredit.addEventListener('keyup', function (e) {
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                kredit.value = formatRupiah(this.value);
            });

            function formatRupiah(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    kredit = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    kredit += separator + ribuan.join('.');
                }
                kredit = split[1] != undefined ? kredit + ',' + split[1] : kredit;
                return prefix == undefined ? kredit : (kredit ?  kredit : '');
            }

        </script>
        <script>
            var dpk = document.getElementById('dpk');
            dpk.addEventListener('keyup', function (e) {
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                dpk.value = formatRupiah3(this.value);
            });

            function formatRupiah3(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    dpk = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    dpk += separator + ribuan.join('.');
                }
                dpk = split[1] != undefined ? dpk + ',' + split[1] : dpk;
                return prefix == undefined ? dpk : (dpk ? dpk : '');
            }

        </script>
        <script>
            var laba = document.getElementById('laba');
            laba.addEventListener('keyup', function (e) {
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                laba.value = formatRupiah4(this.value);
            });

            function formatRupiah4(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    laba = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    laba += separator + ribuan.join('.');
                }
                laba = split[1] != undefined ? laba + ',' + split[1] : laba;
                return prefix == undefined ? laba : (laba ? laba : '');
            }

        </script>
        <script>
            $(document).ready(function () {

                $('#tinjauan_keuangan_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('crud_tinjauan_keuangan.index') }}",
                    },
                    columns: [{
                            data: 'periode',
                            name: 'periode'
                        },
                        {
                            data: 'asset',
                            name: 'asset'
                        },
                        {
                            data: 'kredit',
                            name: 'kredit'
                        },
                        {
                            data: 'dpk',
                            name: 'dpk'
                        },
                        {
                            data: 'laba',
                            name: 'laba'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false
                        }
                    ]
                });
                $('#create_tinjauan_keuangan').click(function () {
                    $('.modal-title').text("Form Tambah Data Tinjauan Keuangan");
                    $('#sample_form')[0].reset();
                    $('#action_button').val("Kirim");
                    $('#action').val("Kirim");
                    $('#formModal').modal('show');
                });
                $('#sample_form').on('submit', function (event) {
                    event.preventDefault();
                    if ($('#action').val() == 'Kirim') {
                        $.ajax({
                            url: "{{ route('crud_tinjauan_keuangan.store') }}",
                            method: "POST",
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType: "json",
                            success: function (data) {
                                var html = '';
                                if (data.errors) {
                                    html = '<div class="alert alert-danger">';
                                    for (var count = 0; count < data.errors
                                        .length; count++) {
                                        html += '<p>' + data.errors[count] + '</p>';
                                    }
                                    html += '</div>';
                                }
                                if (data.success) {
                                    $('#sample_form')[0].reset();
                                    $('#formModal').modal('hide');
                                    Swal.fire({
                                        position: 'middle-center',
                                        icon: 'success',
                                        title: 'Data Berhasil Dikirim',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    $('#tinjauan_keuangan_table').DataTable().ajax.reload();
                                }
                                $('#form_result').html(html);
                            }
                        })
                    }
                });

                $(document).on('click', '.edit', function () {
                    var id = $(this).attr('id');
                    $('#form_result').html('');
                    $.ajax({
                        url: "crud_tinjauan_keuangan/" + id + "/edit",
                        dataType: "json",
                        success: function (html) {
                            $('#periode').val(html.data.periode);
                            $('#asset').val(html.data.asset);
                            $('#kredit').val(html.data.kredit);
                            $('#dpk').val(html.data.dpk);
                            $('#laba').val(html.data.laba);
                            $('#hidden_id').val(html.data.id);
                            $('.modal-title').text("Edit Data");
                            $('#action_button').val("Edit");
                            $('#action').val("Edit");
                            $('#formModal').modal('show');
                        }
                    })
                });

                $('#sample_form').on('submit', function (event) {
                    event.preventDefault();
                    if ($('#action').val() == "Edit") {
                        $.ajax({
                            url: "{{ route('crud_tinjauan_keuangan.update') }}",
                            method: "POST",
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType: "json",
                            success: function (data) {
                                var html = '';
                                if (data.errors) {
                                    html = '<div class="alert alert-danger">';
                                    for (var count = 0; count < data.errors
                                        .length; count++) {
                                        html += '<p>' + data.errors[count] + '</p>';
                                    }
                                    html += '</div>';
                                }
                                if (data.success) {
                                    $('#sample_form')[0].reset();
                                    $('#formModal').modal('hide');
                                    Swal.fire({
                                        position: 'middle-center',
                                        icon: 'success',
                                        title: 'Data Berhasil Disimpan',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    $('#tinjauan_keuangan_table').DataTable().ajax.reload();
                                }
                                $('#form_result').html(html);
                            }
                        });
                    }
                });

                var tinjauan_keuangan_id;

                $(document).on('click', '.delete', function () {
                    tinjauan_keuangan_id = $(this).attr('id');
                    $('#confirmModal').modal('show');
                });

                $('#ok_button').click(function () {
                    $.ajax({
                        url: "crud_tinjauan_keuangan/destroy/" + tinjauan_keuangan_id,
                        beforeSend: function () {
                            $('#ok_button').text('Delete');
                        },
                        success: function (data) {
                            setTimeout(function () {
                                $('#confirmModal').modal('hide');
                                Swal.fire(
                                    'Remind!',
                                    'Data Berhasil Dihapus!',
                                    'success'
                                )
                                $('#tinjauan_keuangan_table').DataTable().ajax
                                    .reload();
                            }, 1500);
                        }
                    })
                });

            });

        </script>
        @endsection

        @section ('script')
        <!-- Page level plugins -->
        <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Page level custom scripts -->
        <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
        @endsection
