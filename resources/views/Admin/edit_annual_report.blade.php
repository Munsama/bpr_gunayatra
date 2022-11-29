@extends('admin.master')

@section ('head')
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<title>Admin BPR Guna Yatra - Edit Annual Report</title>
@endsection

@section('konten')
<div class="container-fluid">
    <a href="javascript:history.back()" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Back"
        class="  mb-3 btn btn-danger ">Back</a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Annual Report</h6>
        </div>
        <div class="card-body">
            <form action="{{route('update_ar')}}" method="post" id="sample_form" class="form-horizontal"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div align="center">
                            <b><label for="dokumen" class="col-sm-5 control-label">Dokumen</label></b>
                            <div>
                            <canvas id="pdfViewer" src="{{asset('storage/annual_report').('/').($data->dokumen)}}" style="width:100%; height:100%;" ></canvas>
                            </div>
                            <input  type="file" accept="application/pdf" name="dokumen" id="myPdf" />
                            <input type="hidden" name="hidden_dokumen" value="{{$data->dokumen}}" />
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div align="center">
                            <b><label for="gambar" class="col-sm-5 control-label">Gambar</label></b>
                            <div>
                                <img id="showgambar" src="{{asset('storage/annual_report').('/').($data->gambar)}}" class="img-fluid"
                                    style=" padding-top: 10px;  padding-bottom: 20px; width:50%; height:50%; ">
                            </div>
                            <input  type="file" accept="image/jpg, image/jpeg, image/png" name="gambar"
                                id="inputgambar" />
                                <input type="hidden" name="hidden_gambar" value="{{$data->gambar}}" />
                            <div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="control-label col-md-12">Judul: </label>
                            <div class="col-md-12">
                                <input required type="text" name="judul" id="judul" class="form-control" value="{{$data->judul}}"
                                    placeholder="Masukkan Judul " />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" value="{{$id}}" />
                    <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-block"
                        value="Edit" />
                </div>
        </div>
    </div>
    </form>
    
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
    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var pdfjsLib = window['pdfjs-dist/build/pdf'];
    // The workerSrc property shall be specified.
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

    $("#myPdf").on("change", function (e) {
        var file = e.target.files[0]
        if (file.type == "application/pdf") {
            var fileReader = new FileReader();
            fileReader.onload = function () {
                var pdfData = new Uint8Array(this.result);
                // Using DocumentInitParameters object to load binary data.
                var loadingTask = pdfjsLib.getDocument({
                    data: pdfData
                });
                loadingTask.promise.then(function (pdf) {
                    console.log('PDF loaded');

                    // Fetch the first page
                    var pageNumber = 1;
                    pdf.getPage(pageNumber).then(function (page) {
                        console.log('Page loaded');

                        var scale = 1.5;
                        var viewport = page.getViewport({
                            scale: scale
                        });

                        // Prepare canvas using PDF page dimensions
                        var canvas = $("#pdfViewer")[0];
                        var context = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        // Render PDF page into canvas context
                        var renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };
                        var renderTask = page.render(renderContext);
                        renderTask.promise.then(function () {
                            console.log('Page rendered');
                        });
                    });
                }, function (reason) {
                    // PDF loading error
                    console.error(reason);
                });
            };
            fileReader.readAsArrayBuffer(file);
        }
    });

</script>

@endsection
