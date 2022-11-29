@extends ('admin.master')

@section ('head')
<title>Admin BPR Guna Yatra - Good Corporate Governance </title>

@endsection

@section ('konten')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Good Corporate Governance</h1>
    <p class="mb-4">Halaman ini berisi data file dokumen annual report yang akan diupload ke website utama/publik</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Data Good Corporate Governance</h6>
        </div>
        <div class="card-body">
            @if (session('errors'))
                <div class="alert alert-danger">
                    {{ session('errors') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div align="right">
            <a href="{{route('add_gcg')}}">  <button type="button" class="btn btn-success btn-sm">Tambah Good Corporate Governance</button></a>
            </div>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="good_corporate_governance_table" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Dokumen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Dokumen</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
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
            $(document).ready(function () {

                $('#good_corporate_governance_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('crud_good_corporate_governance.index') }}",
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'judul',
                            name: 'judul'
                        },
                        {
                            data: 'gambar',
                            name: 'gambar',
                            render: function (data, type, full, meta) {
                                return "<img src={{ URL::to('/') }}/storage/good_corporate_governance/" +
                                    data + " width='70' class='img-fluid' />";
                            },
                            orderable: false
                        },
                        {
                            data: 'dokumen',
                            name: 'dokumen',
                            render: function (data, type, full, meta) {
                                return "<a href= crud_good_corporate_governance/download_dokumen/" + data +
                                    ">" + data + "</a>";
                            }
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false
                        }
                    ]
                });

                var good_corporate_governance_id;

                $(document).on('click', '.delete', function () {
                    good_corporate_governance_id = $(this).attr('id');
                    $('#confirmModal').modal('show');
                });

                $('#ok_button').click(function () {
                    $.ajax({
                        url: "crud_good_corporate_governance/destroy/" + good_corporate_governance_id,
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
                                $('#good_corporate_governance_table').DataTable().ajax.reload();
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
