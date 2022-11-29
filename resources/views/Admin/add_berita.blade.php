@extends('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - Add Berita</title>
@endsection

@section('konten')
<div class="container-fluid">
<a href="javascript:history.back()" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Back" class="  mb-3 btn btn-danger ">Back</a>
   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Berita</h6>
        </div>
        <div class="card-body">
            <form action="{{route('store_brt')}}" method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4 ">
                        <div align="center">
                            <b><label for="foto" class="col-sm-5 control-label">Foto</label></b>
                            <div>
                                <img id="showgambar" src="" class="img-fluid" style=" padding-top: 10px;  padding-bottom: 20px; width:70%; height:70%; ">
                            </div>
                            <input required type="file" accept="image/jpg, image/jpeg, image/png" name="foto" id="inputgambar" />
                            <div>    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="control-label col-md-12" >Tanggal: </label>
                            <div class="col-md-12">
                            <input required type="date" name="tanggal" id="tanggal" class="form-control" placeholder="31/12/2020" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-12" >Judul: </label>
                            <div class="col-md-12">
                                <input required type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Berita" />
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="col-lg-12">    
                        <div class="form-group">
                            <label class="control-label col-md-12" >Deskripsi: </label>
                            <div class="col-md-12">
                            <textarea required name="deskripsi" id="deskripsi"  class="ckeditor form-control"  placeholder="Masukkan Deskripsi Berita"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-block" value="Add" />
                        </div>
                    </div>
                </div>    
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>
<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('deskripsi', {
        filebrowserUploadUrl: "{{route('des_img', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

@endsection

