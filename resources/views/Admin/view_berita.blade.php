@extends('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - View Berita</title>
@endsection

@section('konten')
<div class="container-fluid">
<a href="javascript:history.back()" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Back" class="  mb-3 btn btn-danger ">Back</a>
   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Berita</h6>
        </div>
        <div class="card-body">
            @csrf
            <div class="row">
              <div class="col-lg-4 ">
                <div align="center">
                <b><label for="foto" class="col-sm-5 control-label">Foto</label></b>
                <div><img id="foto" src="{{asset ('images').('/').($data->foto)}}" class="img-fluid" style=" padding-top: 10px;  padding-bottom: 20px; width:70%; height:70%; ">
            </div>
            </div>
            </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <label class="control-label col-md-12" >Tanggal: </label>
                        <div class="col-md-12">
                        <label class="control-label col-md-12">{{$data->tanggal}}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12" >Judul: </label>
                        <div class="col-md-12">
                        <label class="control-label col-md-12">{{$data->judul}}</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">    
                    <div class="form-group">
                        <label class="control-label col-md-12" >Deskripsi: </label>
                        <div class="col-md-12">
                        <textarea readonly name="deskripsi" id="deskripsi" class="ckeditor form-control">{{$data->deskripsi}}</textarea>
                        </div>
                    </div>
                </div>    
        </div>
    </div>
</div>
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

