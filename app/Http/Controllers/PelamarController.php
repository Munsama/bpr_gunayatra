<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;
use App\Mail\FormLamarKerja;
use Illuminate\Support\Facades\Mail;
use DB;
use Validator;
use Response;
use File;
use Storage;

class PelamarController extends Controller
{
    //
    public function index()
        {
            if(request()->ajax())
            {
                return datatables()->of(DB::table('pelamar')->orderby('pelamar.created_at','desc')->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            $data = Pelamar::get();
            return view('admin.pelamar', compact('data'));
        }

    public function storeForm(Request $request) {
        $this->validate($request, [
          'posisi' => 'required',
          'nama' => 'required',
          'alamat' => 'required',
          'tempat_lahir' => 'required',
          'tanggal_lahir' => 'required',
          'jenis_kelamin' => 'required',
          'email' => 'required|email',
          'hp' => 'required',
          'cv'=>'required|max:2048',
          'foto' => 'required|max:2048',
          'ijazah' => 'required|max:2048',
          'skck' => 'required|max:2048',
          'sertifikat' => 'required|max:2048'
       ]);

       $form_data = $request->all();
       
       if ($request->hasFile('cv')) {
           
        $form_data['cv'] = time()."_".str_replace(' ', '_', $request->cv->getClientOriginalName());
        $request->cv->storeAs('loker', $form_data['cv']);
        }
        if ($request->hasFile('foto')) {
            $form_data['foto'] = time()."_".str_replace(' ','_',$request->foto->getClientOriginalName());
            $request->foto->storeAs('loker', $form_data['foto']);
        }
        if ($request->hasFile('ijazah')) {
            $form_data['ijazah'] = time()."_".str_replace(' ','_',$request->ijazah->getClientOriginalName());
            $request->ijazah->storeAs('loker', $form_data['ijazah']);
        }
        if ($request->hasFile('skck')) {
            $form_data['skck'] = time()."_".str_replace(' ','_',$request->skck->getClientOriginalName());
            $request->skck->storeAs('loker', $form_data['skck']);
        }
        if ($request->hasFile('sertifikat')) {
            $form_data['sertifikat'] = time()."_".str_replace(' ','_',$request->sertifikat->getClientOriginalName());
            $request->sertifikat->storeAs('loker', $form_data['sertifikat']);
        }

       Pelamar::create($form_data);

       Mail::to('karir.gunayatra@gmail.com')->send(new FormLamarKerja($form_data));
      
        return redirect()->back()->with('success', 
        'Lamaran Anda berhasil dikirim. Terima kasih telah mengajukan lamaran.');
    }

    public function download_cv($id)
        {
            $data = DB::table('pelamar')->where('pelamar.cv',$id)->first();
            if (Storage::disk('public')->exists("loker/$data->cv"))
            {
                $path = Storage::disk('public')->path("loker/$data->cv");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    public function download_foto($id)
        {
            $data = DB::table('pelamar')->where('pelamar.foto',$id)->first();
            if (Storage::disk('public')->exists("loker/$data->foto"))
            {
                $path = Storage::disk('public')->path("loker/$data->foto");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    public function download_ijazah($id)
        {
            $data = DB::table('pelamar')->where('pelamar.ijazah',$id)->first();
            if (Storage::disk('public')->exists("loker/$data->ijazah"))
            {
                $path = Storage::disk('public')->path("loker/$data->ijazah");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    public function download_skck($id)
        {
            $data = DB::table('pelamar')->where('pelamar.skck',$id)->first();
            if (Storage::disk('public')->exists("loker/$data->skck"))
            {
                $path = Storage::disk('public')->path("loker/$data->skck");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    public function download_sertifikat($id)
        {
            $data = DB::table('pelamar')->where('pelamar.sertifikat',$id)->first();
            if (Storage::disk('public')->exists("loker/$data->sertifikat"))
            {
                $path = Storage::disk('public')->path("loker/$data->sertifikat");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    public function destroy($id)
        {
            $data = Pelamar::findOrFail($id);
           
            if (Storage::exists('loker/'.$data->cv))
                {    
                    Storage::delete('loker/'.$data->cv);
                    Storage::delete('loker/'.$data->foto);
                    Storage::delete('loker/'.$data->ijazah);
                    Storage::delete('loker/'.$data->skck);
                    Storage::delete('loker/'.$data->sertifikat);
                    $data->delete();
                }
            else
                {
                    dd('File does not exists.');
                }
            
        }
}
