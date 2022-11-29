<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use DB;
use Validator;
use Response;
use File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            if(request()->ajax())
            {
                return datatables()->of(DB::table('berita')->orderby('tanggal','desc')->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<a href="crud_berita/view/'.$data->id.'"> <button type="button" name="view"  id="' . $data->id . '" class="view btn btn-warning btn-sm  ">View</button> </a>';
                            $button .= '<a href="crud_berita/edit/'.$data->id.'"> <button type="button" name="edit" id="' . $data->id . '" class=" btn btn-primary btn-sm  ">Edit</button> </a>';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('admin.berita');
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('admin.add_berita');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $rules = array(
                'tanggal'       => 'required',
                'foto'          => 'required|image|max:2048',
                'judul'         => 'required',
                'deskripsi'     => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            //proses foto
            $foto = $request->file('foto');
            $rename = str_replace(' ','_',$foto->getClientOriginalName());
            $nama_foto= time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'images';
            $foto->move(public_path($tujuan_upload),$nama_foto);

            $form_data = array(
                'tanggal'       =>  $request->tanggal,
                'foto'          =>  $nama_foto,
                'judul'         =>  $request->judul,
                'deskripsi'     =>  $request->deskripsi,
            );
            Berita::create($form_data);
            return redirect('crud_berita')->with(['success' => 'Data berhasil ditambahkan']);
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
            $data = DB::table('berita')->where('berita.id',$id)->first();
            return view('admin.view_berita', compact('id','data'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $data = DB::table('berita')->where('berita.id',$id)->first();
            return view('admin.edit_berita', compact('id','data'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
            $nama_foto = $request->hidden_foto;
            $foto = $request->file('foto');
            
            if($foto != '')
            {
            $rules = array(
                'tanggal'       => 'required',
                'foto'          => 'required|image|max:2048',
                'judul'         => 'required',
                'deskripsi'     => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            $data = DB::table('berita')->where('id',$request->id)->first();
		    File::delete(public_path('images/'.$data->foto));

            $rename = str_replace(' ','_',$foto->getClientOriginalName());
            $nama_foto = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'images';
            $foto->move(public_path($tujuan_upload),$nama_foto);
        }
        else 
        {
            $rules = array(
                'tanggal'       => 'required',
                'judul'         => 'required',
                'deskripsi'     => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }
        $form_data = array(
            'tanggal'       =>  $request->tanggal,
            'foto'          =>  $nama_foto,
            'judul'         =>  $request->judul,
            'deskripsi'     =>  $request->deskripsi,
        
        );
        DB::table('berita')->where('id',$request->id)->update($form_data);
        return  redirect('crud_berita')->with(['success' => 'Data berhasil diperbarui']);
    }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $data = Berita::findOrFail($id);
		    File::delete(public_path('images/'.$data->foto));

            $data = Berita::findOrFail($id);
            $data->delete();
        }

    public function upload_deskripsi(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

}
