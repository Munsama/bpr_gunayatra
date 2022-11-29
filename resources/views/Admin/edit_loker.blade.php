@extends('admin.master')

@section ('head')
    <title>Admin BPR Guna Yatra - Edit Loker</title>
@endsection

@section('konten')
<div class="container-fluid">
<a href="javascript:history.back()" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Back" class="  mb-3 btn btn-danger ">Back</a>
   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Loker</h6>
        </div>
        <div class="card-body">
            <form action="{{route('update_lkr')}}" method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                         <label class="control-label col-md-12" >Tanggal: </label>
                            <div class="col-md-12">
                            <input required type="date" name="tanggal" id="tanggal" class="form-control" value="{{$data->tanggal}}" placeholder="31/12/2020" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Nama Pekerjaan: </label>
                            <div class="col-md-12">
                             <input required type="text" name="nama_pekerjaan" id="nama_pekerjaan" class="form-control" value="{{$data->nama_pekerjaan}}"placeholder="Masukkan Nama Pekerjaan" />
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Kualifikasi </label>
                            <div class="col-md-12">
                            <textarea required name="kualifikasi" id="kualifikasi"  class="ckeditor form-control"  placeholder="Kualifikasi Yang Dibutuhkan">{{$data->kualifikasi}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Objektif </label>
                            <div class="col-md-12">
                            <textarea required name="objektif" id="objekif"  class="ckeditor form-control"  placeholder="Pekerjaan Yang Dilakukan">{{$data->objektif}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-12" >Keuntungan </label>
                            <div class="col-md-12">
                            <textarea required name="keuntungan" id="keuntungan"  class="ckeditor form-control"  placeholder="Keuntungan Yang Didapat Pekerja">{{$data->keuntungan}}</textarea>
                            </div>
                        </div>

                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" value="{{$id}}" />
                    <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-block" value="Edit" />
                </div>
            </form>
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

