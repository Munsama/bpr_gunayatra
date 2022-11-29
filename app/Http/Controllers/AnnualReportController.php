<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnnualReport;
use Validator;
use DB;
use Storage;

class AnnualReportController extends Controller
{
    //
    public function index()
        {
            if(request()->ajax())
            {
                return datatables()->of(DB::table('annual_report')->orderby('annual_report.created_at','desc')->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<a href="crud_annual_report/edit/'.$data->id.'"> <button type="button" name="edit" id="' . $data->id . '" class=" btn btn-primary btn-sm  ">Edit</button> </a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            $data = AnnualReport::get();
            return view('admin.annual_report', compact('data'));
        }
        public function create()
        {
            return view('admin.add_annual_report');
        }

    public function store(Request $request) {
        $this->validate($request, [
          
          'judul' => 'required',
          'gambar' => 'required|max:2048',
          'dokumen' => 'required|max:2048',
       ]);

       $form_data = $request->all();
       
        if ($request->hasFile('gambar')) {
            $form_data['gambar'] = time()."_".str_replace(' ','_',$request->gambar->getClientOriginalName());
            $request->gambar->storeAs('annual_report', $form_data['gambar']);
        }
        if ($request->hasFile('dokumen')) {
            $form_data['dokumen'] = time()."_".str_replace(' ','_',$request->dokumen->getClientOriginalName());
            $request->dokumen->storeAs('annual_report', $form_data['dokumen']);
        }

       AnnualReport::create($form_data);
      
       return redirect('crud_annual_report')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function edit($id)
        {
            $data = DB::table('annual_report')->where('annual_report.id',$id)->first();
            return view('admin.edit_annual_report', compact('id','data'));
        }
    
        public function update(Request $request) {
            
            $nama_gambar = $request->hidden_gambar;
            $nama_dokumen = $request->hidden_dokumen;
            $gambar = $request->file('gambar');
            $dokumen = $request->file('dokumen');
            
            if($gambar && $dokumen != '')
            {
            $rules = array(
                'judul' => 'required',
                'gambar' => 'required|max:2048',
                'dokumen' => 'required|max:2048',
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            //GAMBAR
            $data = DB::table('annual_report')->where('id',$request->id)->first();
		    Storage::delete('annual_report/'.$data->gambar);
            $rename = str_replace(' ','_',$gambar->getClientOriginalName());
            $nama_gambar = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'annual_report';
            $gambar->storeAs($tujuan_upload,$nama_gambar);
            //DOKUMEN
            $data = DB::table('annual_report')->where('id',$request->id)->first();
		    Storage::delete('annual_report/'.$data->dokumen);
            $rename = str_replace(' ','_',$dokumen->getClientOriginalName());
            $nama_dokumen = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'annual_report';
            $dokumen->storeAs($tujuan_upload,$nama_dokumen);
        }
        else if ($gambar!=''){
            $rules = array(
                'judul' => 'required',
                'gambar' => 'required|max:2048',
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            //GAMBAR
            $data = DB::table('annual_report')->where('id',$request->id)->first();
		    Storage::delete('annual_report/'.$data->gambar);
            $rename = str_replace(' ','_',$gambar->getClientOriginalName());
            $nama_gambar = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'annual_report';
            $gambar->storeAs($tujuan_upload,$nama_gambar);
            }
        else if ($dokumen!=''){
            $rules = array(
                'judul' => 'required',
                'dokumen' => 'required|max:2048',
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            //GAMBAR
            $data = DB::table('annual_report')->where('id',$request->id)->first();
		    Storage::delete('annual_report/'.$data->dokumen);
            $rename = str_replace(' ','_',$dokumen->getClientOriginalName());
            $nama_dokumen = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'annual_report';
            $dokumen->storeAs($tujuan_upload,$nama_dokumen);
            }
        else {
            $rules = array(
                'judul' => 'required',
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            } 
        }
        $form_data = array(
            'judul'         =>  $request->judul,
            'gambar'          =>  $nama_gambar,
            'dokumen'     =>  $nama_dokumen,
        );
        DB::table('annual_report')->where('id',$request->id)->update($form_data);
        return  redirect('crud_annual_report')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function download_gambar($id)
        {
            $data = DB::table('annual_report')->where('annual_report.gambar',$id)->first();
            if (Storage::disk('public')->exists("annual_report/$data->gambar"))
            {
                $path = Storage::disk('public')->path("annual_report/$data->gambar");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    public function download_dokumen($id)
        {
            $data = DB::table('annual_report')->where('annual_report.dokumen',$id)->first();
            if (Storage::disk('public')->exists("annual_report/$data->dokumen"))
            {
                $path = Storage::disk('public')->path("annual_report/$data->dokumen");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    
    public function destroy($id)
        {
            $data = AnnualReport::findOrFail($id);
           
            if (Storage::exists('annual_report/'.$data->dokumen))
                {    
                    Storage::delete('annual_report/'.$data->gambar);
                    Storage::delete('annual_report/'.$data->dokumen);
                    $data->delete();
                }
            else
                {
                    return response()->json(['error' => 'Data Tidak Ditemukan.']);
                } 
        }
}
