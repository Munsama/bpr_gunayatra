@extends ('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - Kontak Kami </title>
@endsection

@section ('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kontak Kami</h1>
        <p class="mb-4">Pada halaman ini admin mengatur data kontak kami yang telah diterima dari pelanggan.</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"> Data Kontak Kami</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="kontak_table" width="100%">
                     <thead>
                      <tr>
                       <th> No </th>
                       <th> Nama</th>
                       <th> Email</th>
                       <th> Telp/HP</th>
                       <th> Judul</th>
                       <th> Pesan</th>
                       <th> Aksi </th>
                      </tr>
                     </thead>
                     <tfoot>
                      <tr>
                       <th> No </th>
                       <th> Nama</th>
                       <th> Email</th>
                       <th> Telp/HP</th>
                       <th> Judul</th>
                       <th> Pesan</th>
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
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button>                
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
 $('#kontak_table').DataTable({
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('crud_kontak.index') }}",
    },
  columns:[
   {data: 'DT_RowIndex', name: 'DT_RowIndex'},
   {data: 'name', name: 'name'},
   {data: 'email', name: 'email'},
   {data: 'phone', name: 'phone'},
   {data: 'subject', name: 'subject'},
   {data: 'message', name: 'message'},
   {data: 'action', name: 'action', orderable: false}
        ]
    });

 var kontak_id;

 $(document).on('click', '.delete', function(){
  kontak_id = $(this).attr('id');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
   url:"crud_kontak/destroy/"+kontak_id,
   beforeSend:function(){
    $('#ok_button').text('Delete');
   },
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
        Swal.fire(
              'Remind!',
              'Data Berhasil Dihapus!',
              'success'
            )
     $('#kontak_table').DataTable().ajax.reload();
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