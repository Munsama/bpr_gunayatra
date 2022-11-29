@extends('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - View Loker</title>
@endsection

@section('konten')
<div class="container-fluid">
<a href="javascript:history.back()" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Back" class="  mb-3 btn btn-danger ">Back</a>
   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Loker</h6>
        </div>
        <div class="card-body">
        
                @csrf
                <div class="form-group">
                         <label class="control-label col-md-12" >Tanggal: </label>
                            <div class="col-md-12">
                            <label class="control-label col-md-12">{{$data->tanggal}} </label>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Nama Pekerjaan: </label>
                            <div class="col-md-12">
                             <label class="control-label col-md-12">{{$data->nama_pekerjaan}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Kualifikasi </label>
                            <div class="col-md-12">
                            <textarea readonly name="kualifikasi" id="kualifikasi"  class="ckeditor form-control">{{$data->kualifikasi}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Objektif </label>
                            <div class="col-md-12">
                            <textarea readonly name="objektif" id="objekif"  class="ckeditor form-control">{{$data->objektif}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Keuntungan </label>
                            <div class="col-md-12">
                            <textarea readonly name="keuntungan" id="keuntungan"  class="ckeditor form-control">{{$data->keuntungan}}</textarea>
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
    CKEDITOR.replace('kualifikasi', {
        filebrowserUploadUrl: "{{route('klf_img', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('objektif', {
        filebrowserUploadUrl: "{{route('obj_img', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('keuntungan', {
        filebrowserUploadUrl: "{{route('knt_img', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection

