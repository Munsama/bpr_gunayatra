@extends ('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - Investasi </title>
    
@endsection

@section ('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pinjaman Investasi</h1>
        <p class="mb-4">Halaman ini berisi data calon nasabah yang mengajukan kredit investasi. 
            Admin dapat merubah status menjadi proses ketika mulai melayani calon nasabah 
            atau selesai ketika sudah menyelesaikan layanan terhadap nasabah yang bersangkutan</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"> Data Pengajuan Investasi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="investasi_table" width="100%">
                     <thead>
                      <tr>
                       <th> No </th>
                       <th> Nama</th>
                       <th> Alamat</th>
                       <th> Telepon</th>
                       <th> Email</th>
                       <th> Nominal</th>
                       <th> Status</th>
                       <th> Aksi </th>
                      </tr>
                     </thead>
                     <tfoot>
                      <tr>
                       <th> No </th>
                       <th> Nama</th>
                       <th> Alamat</th>
                       <th> Telepon</th>
                       <th> Email</th>
                       <th> Nominal</th>
                       <th> Status</th>
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
                         <label class="control-label col-md-12" >Nama: </label>
                            <div class="col-md-12">
                             <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Alamat: </label>
                            <div class="col-md-12">
                             <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Mssukkan Alamat" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >No. Telp </label>
                            <div class="col-md-12">
                             <input type="tel" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                             name="telp" id="telp" class="form-control" placeholder="e.g: 0891234567890" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Email </label>
                            <div class="col-md-12">
                             <input type="email" name="email" id="email" class="form-control" placeholder="e.g: example@yourmail.domain" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Nominal </label>
                            <div class="col-md-12">
                             <input type="tel" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                             name="nominal" id="nominal" class="form-control" placeholder="e.g: Rp100.000" />
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-12"> Status</label>
                            <div class="col-md-12">
                            <select class="form-control" name ="status" id="status" >
                            <option value="Tunggu"> Tunggu</option>
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                            </select>
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

 $('#investasi_table').DataTable({
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('crud_investasi.index') }}",
  },
  columns:[
   {data: 'DT_RowIndex', name: 'DT_RowIndex'},
   {data: 'nama', name: 'nama'},
   {data: 'alamat', name: 'alamat'},
   {data: 'telp', name: 'telp'},
   {data: 'email', name: 'email'},
   {data: 'nominal', name: 'nominal'},
   {data: 'status', name: 'status'},
   {data: 'action', name: 'action',
    orderable: false
   }
  ]
 });


 $(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $('#form_result').html('');
  $.ajax({
   url:"crud_investasi/"+id+"/edit",
   dataType:"json",
   success:function(html){
    $('#nama').val(html.data.nama);
    $('#alamat').val(html.data.alamat);
    $('#telp').val(html.data.telp);
    $('#email').val(html.data.email);
    $('#nominal').val(html.data.nominal);
    $('#status').val(html.data.status);
    $('#hidden_id').val(html.data.id);
    $('.modal-title').text("Edit Data");
    $('#action_button').val("Edit");
    $('#action').val("Edit");
    $('#formModal').modal('show');
   }
  })
 });

 $('#sample_form').on('submit', function(event){
  event.preventDefault();
  if($('#action').val() == "Edit")
  {
   $.ajax({
    url:"{{ route('crud_investasi.update') }}",
    method:"POST",
    data:new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    dataType:"json",
    success:function(data)
    {
     var html = '';
     if(data.errors)
     {
      html = '<div class="alert alert-danger">';
      for(var count = 0; count < data.errors.length; count++)
      {
       html += '<p>' + data.errors[count] + '</p>';
      }
      html += '</div>';
     }
     if(data.success)
     {
      $('#sample_form')[0].reset();
      $('#formModal').modal('hide');
          Swal.fire({
            position: 'middle-center',
            icon: 'success',
            title: 'Data Berhasil Disimpan',
            showConfirmButton: false,
            timer: 1500
          })
      $('#investasi_table').DataTable().ajax.reload();
     }
     $('#form_result').html(html);
    }
   });
  }
 });

 var investasi_id;

 $(document).on('click', '.delete', function(){
  investasi_id = $(this).attr('id');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
   url:"crud_investasi/destroy/"+investasi_id,
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
     $('#investasi_table').DataTable().ajax.reload();
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