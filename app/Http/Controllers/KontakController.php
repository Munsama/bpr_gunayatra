<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use App\Mail\FormKontak;
use Illuminate\Support\Facades\Mail;
use DB;

class KontakController extends Controller

{
    //
    public function index()
        {
            if(request()->ajax())
            {
                return datatables()->of(DB::table('kontak')->orderby('kontak.created_at','desc')->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('admin.kontak');
        }

    public function storeForm(Request $request) 
        {
                $this->validate($request, 
            [
                'name'    => 'required',
                'email'   => 'required|email',
                'phone'   => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]);
                $form_data = 
            [
                'name'      =>  $request['name'],
                'email'     =>  $request['email'],
                'phone'     =>  $request['phone'],
                'subject'   =>  $request['subject'],
                'message'   =>  $request['message'] 
            ];

            Kontak::create($form_data);

            Mail::to('gunayatra@gmail.com')->send(new FormKontak($form_data));
      
            return redirect()->back()->with('success', 
            'Pesan Anda berhasil dikirim. Terima kasih telah menghubungi kami.');
        } 

    public function destroy($id)
        {
            $data = Kontak::findOrFail($id);
            $data->delete();
        }
}
