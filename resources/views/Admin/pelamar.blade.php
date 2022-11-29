@extends ('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - Pelamar Kerja </title>
@endsection

@section ('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pelamar Kerja</h1>
        <p class="mb-4">Pada halaman ini admin dapat mengatur data pelamar kerja yang telah tersimpan</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"> Data Pelamar Kerja</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="pelamar_table" width="100%">
                     <thead>
                      <tr>
                       <th> No </th>
                       <th> Posisi </th>
                       <th> Nama</th>
                       <th> Tempat Lahir</th>
                       <th> Tanggal Lahir</th>
                       <th> Jenis Kelamin</th>
                       <th> Alamat</th>
                       <th> Email</th>
                       <th> Telp/HP</th>
                       <th> CV </th>
                       <th> Ijazah </th>
                       <th> Foto </th>
                       <th> SKCK </th>
                       <th> Sertifikat </th>
                       <th> Aksi </th>
                      </tr>
                     </thead>
                     <tfoot>
                      <tr>
                       <th> No </th>
                       <th> Posisi </th>
                       <th> Nama</th>
                       <th> Tempat Lahir</th>
                       <th> Tanggal Lahir</th>
                       <th> Jenis Kelamin</th>
                       <th> Alamat</th>
                       <th> Email</th>
                       <th> Telp/HP</th>
                       <th> CV </th>
                       <th> Ijazah </th>
                       <th> Foto </th>
                       <th> SKCK </th>
                       <th> Sertifikat </th>
                       <th> Aksi </th>
                      </tr>
                     </tfoot>
                     <tbody>
                     </tbody>
                    </table>
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
                <button type="button" name="cancel_button" id="cancel_button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" name="hapus_button" id="hapus_button" class="btn btn-danger btn-sm">Hapus</button>                
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#pelamar_table').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url: "{{ route('crud_pelamar.index') }}",
                },
                columns:[
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'posisi', name: 'posisi'},
                    {data: 'nama', name: 'nama'},
                    {data: 'tempat_lahir', name: 'tempat_lahir' },
                    {data: 'tanggal_lahir', name: 'tanggal_lahir',
                        render: function ( data, type, row ) {
                            var dateSplit = data.split('-');
                            return type === "display" || type === "filter" ? 
                            dateSplit[2] +'-'+ dateSplit[1] +'-'+ dateSplit[0] :
                            data;} },
                    {data: 'jenis_kelamin', name: 'jenis_kelamin'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'email', name: 'email'},
                    {data: 'hp', name: 'hp'},
                    {data: 'cv', name: 'cv', 
                    render: function(data, type, full, meta){
                        return "<a href= crud_pelamar/download_cv/" + data + ">" + data + "</a>";
                    } },
                    {data: 'ijazah', name: 'ijazah', 
                    render: function(data, type, full, meta){
                        return "<a href= crud_pelamar/download_ijazah/" + data + ">" + data + "</a>";
                    } },
                    {data: 'foto', name: 'foto', 
                    render: function(data, type, full, meta){
                        return "<a href= crud_pelamar/download_foto/" + data + ">" + data + "</a>";
                    } },
                    {data: 'skck', name: 'skck', 
                    render: function(data, type, full, meta){
                        return "<a href= crud_pelamar/download_skck/" + data + ">" + data + "</a>";
                    } },
                    {data: 'sertifikat', name: 'sertifikat', 
                    render: function(data, type, full, meta){
                        return "<a href= crud_pelamar/download_sertifikat/" + data + ">" + data + "</a>";
                    } },      
                    {data: 'action', name: 'action', orderable: false}
                ]
            });   
            
            var pelamar_id;
            $(document).on('click', '.delete', function(){
                pelamar_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"crud_pelamar/destroy/"+pelamar_id,
                    beforeSend:function(){
                        $('#hapus_button').text('Hapus');
                    },
                    success:function(data){
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            Swal.fire(
                                'Remind!',
                                'Data Berhasil Dihapus!',
                                'success'
                            )
                            $('#pelamar_table').DataTable().ajax.reload();
                        }, 500);
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