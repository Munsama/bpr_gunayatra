@extends ('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - Lowongan Kerja</title>
@endsection

@section ('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Lowongan Kerja</h1>
        <p class="mb-4">Pada halaman ini admin dapat menambah, mengubah, dan menghapus lowongan kerja yang akan ditampilkan di web umum BPR Guna Yatra.</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"> Data Lowongan Kerja</h6>
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
                <a href="{{route('add_lkr')}}">  <button type="button" class="btn btn-success btn-sm">Add Loker</button></a>
                </div>
                <br />
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="loker_table" width="100%">
                     <thead>
                      <tr>
                       <th> No </th>
                       <th> Tanggal</th>
                       <th> Nama Pekerjaan</th>
                       <th> Kualifikasi</th>
                       <th> Objektif</th>
                       <th> Keuntungan</th>
                       <th> Aksi </th>
                      </tr>
                     </thead>
                     <tfoot>
                      <tr>
                        <th> No </th>
                       <th> Tanggal</th>
                       <th> Nama Pekerjaan</th>
                       <th> Kualifikasi</th>
                       <th> Objektif</th>
                       <th> Keuntungan</th>
                       <th> Aksi </th>
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
                         <button type="button" name="cancel_button" id="cancel_button"class="close" 
                         data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                         <span id="form_result"></span>
                          <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                         <label class="control-label col-md-12" >Tanggal: </label>
                            <div class="col-md-12">
                            <input required type="date" name="tanggal" id="tanggal" class="form-control" placeholder="31/12/2020" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Nama Pekerjaan: </label>
                            <div class="col-md-12">
                             <input required type="text" name="nama_pekerjaan" id="nama_pekerjaan" class="form-control" placeholder="Masukkan Nama Pekerjaan" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Kualifikasi </label>
                            <div class="col-md-12">
                            <textarea required name="kualifikasi" id="kualifikasi"  class="ckeditor form-control"  placeholder="Kualifikasi Yang Dibutuhkan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Objektif </label>
                            <div class="col-md-12">
                            <textarea required name="objektif" id="objekif"  class="ckeditor form-control"  placeholder="Pekerjaan Yang Dilakukan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Keuntungan </label>
                            <div class="col-md-12">
                            <textarea required name="keuntungan" id="keuntungan"  class="ckeditor form-control"  placeholder="Keuntungan Yang Didapat Pekerja"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="action" id="action" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <button type="button" name="cancel_button" id="cancel_button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-sm" value="Add" />            
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
            <button type="button" name="cancel_button" id="cancel_button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button>                
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
 $('#loker_table').DataTable({
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('crud_loker.index') }}",
  },
  columns:[
   {data: 'DT_RowIndex', name: 'DT_RowIndex'},
   {data: 'tanggal', name: 'tanggal',
        render: function ( data, type, row ) {
        var dateSplit = data.split('-');
        return type === "display" || type === "filter" ? 
        dateSplit[2] +'-'+ dateSplit[1] +'-'+ dateSplit[0] :
        data;} },
   {data: 'nama_pekerjaan', name: 'nama_pekerjaan'},
   {data: 'kualifikasi', name: 'kualifikasi'},
   {data: 'objektif', name: 'objektif'},
   {data: 'keuntungan', name: 'keuntungan'},
   {data: 'action', name: 'action',
    orderable: false
   }
  ]
 });

 var loker_id;

 $(document).on('click', '.delete', function(){
  loker_id = $(this).attr('id');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
   url:"crud_loker/destroy/"+loker_id,
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
     $('#loker_table').DataTable().ajax.reload();
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