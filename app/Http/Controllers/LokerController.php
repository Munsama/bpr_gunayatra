<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use Validator;
use DB;
use Response;

class LokerController extends Controller
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
                return datatables()->of(DB::table('loker')->orderby('loker.tanggal','desc')->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<a href="crud_loker/view/'.$data->id.'"> <button type="button" name="view"  id="' . $data->id . '" class="view btn btn-warning btn-sm  ">View</button> </a>';
                            $button .= '<a href="crud_loker/edit/'.$data->id.'"> <button type="button" name="edit" id="' . $data->id . '" class=" btn btn-primary btn-sm  ">Edit</button> </a>';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('admin.loker');
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
           
            return view('admin.add_loker');
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
                'tanggal'          => 'required',
                'nama_pekerjaan'   => 'required',
                'kualifikasi'      => 'required',
                'objektif'         => 'required',
                'keuntungan'       => 'required'
                
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            $form_data = array(
                'tanggal'          =>  $request->tanggal,
                'nama_pekerjaan'   =>  $request->nama_pekerjaan,
                'kualifikasi'      =>  $request->kualifikasi,
                'objektif'         =>  $request->objektif,
                'keuntungan'       =>  $request->keuntungan
                
            );
            Loker::create($form_data);
            return redirect('crud_loker')->with(['success' => 'Data berhasil ditambahkan']);
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
            $data = DB::table('loker')->where('loker.id',$id)->first();
            return view('admin.view_loker', compact('id','data'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $data = DB::table('loker')->where('loker.id',$id)->first();
            return view('admin.edit_loker', compact('id','data'));
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
                $rules = array(
                    'tanggal'          => 'required',
                    'nama_pekerjaan'   => 'required',
                    'kualifikasi'      => 'required',
                    'objektif'         => 'required',
                    'keuntungan'       => 'required'
                );
                $error = Validator::make($request->all(), $rules);
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
            $form_data = array(
                'tanggal'          =>  $request->tanggal,
                'nama_pekerjaan'   =>  $request->nama_pekerjaan,
                'kualifikasi'      =>  $request->kualifikasi,
                'objektif'         =>  $request->objektif,
                'keuntungan'       =>  $request->keuntungan
            );
            DB::table('loker')->where('id',$request->id)->update($form_data);
         return  redirect('crud_loker')->with(['success' => 'Data berhasil diperbarui']);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $data = Loker::findOrFail($id);
            $data->delete();
        }

    public function upload_kualifikasi(Request $request)
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

    public function upload_objektif(Request $request)
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
    public function upload_keuntungan(Request $request)
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
