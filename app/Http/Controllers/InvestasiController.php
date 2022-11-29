<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investasi;
use Validator;

class InvestasiController extends Controller
{
    //
    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            if(request()->ajax())
            {
                return datatables()->of(Investasi::latest()->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm  ">Edit</button>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('admin.investasi');
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
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
                'nama'          => 'required',
                'alamat'          => 'required',
                'telp'          => 'required',
                'email'          => 'required',
                'nominal'          => 'required'
                
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            $form_data = array(
                'nama'          =>  $request->nama,
                'alamat'          =>  $request->alamat,
                'telp'          =>  $request->telp,
                'email'          =>  $request->email,
                'nominal'          =>  $request->nominal
               
            );
            Investasi::create($form_data);
            return response()->json(['success' => 'Data Added successfully.']);
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
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
                if(request()->ajax())
            {
                $data = Investasi::findOrFail($id);
                return response()->json(['data' => $data]);
            }
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
                'nama'          => 'required',
                'alamat'          => 'required',
                'telp'          => 'required',
                'email'          => 'required',
                'nominal'          => 'required',
                'status'          => 'required'
                );
                $error = Validator::make($request->all(), $rules);
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
            $form_data = array(
                'nama'          =>  $request->nama,
                'alamat'          =>  $request->alamat,
                'telp'          =>  $request->telp,
                'email'          =>  $request->email,
                'nominal'          =>  $request->nominal,
                'status'          =>  $request->status
            );
            Investasi::whereId($request->hidden_id)->update($form_data);
            return response()->json(['success' => 'Data is successfully updated']);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $data = Investasi::findOrFail($id);
            $data->delete();
        }
}
