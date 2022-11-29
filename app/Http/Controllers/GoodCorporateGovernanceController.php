<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoodCorporateGovernance;
use Validator;
use DB;
use Storage;

class GoodCorporateGovernanceController extends Controller
{
    //
    public function index()
        {
            if(request()->ajax())
            {
                return datatables()->of(DB::table('good_corporate_governance')->orderby('good_corporate_governance.created_at','desc')->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<a href="crud_good_corporate_governance/edit/'.$data->id.'"> <button type="button" name="edit" id="' . $data->id . '" class=" btn btn-primary btn-sm  ">Edit</button> </a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            $data = GoodCorporateGovernance::get();
            return view('admin.good_corporate_governance', compact('data'));
        }
        public function create()
        {
            return view('admin.add_good_corporate_governance');
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
            $request->gambar->storeAs('good_corporate_governance', $form_data['gambar']);
        }
        if ($request->hasFile('dokumen')) {
            $form_data['dokumen'] = time()."_".str_replace(' ','_',$request->dokumen->getClientOriginalName());
            $request->dokumen->storeAs('good_corporate_governance', $form_data['dokumen']);
        }

       GoodCorporateGovernance::create($form_data);
      
       return redirect('crud_good_corporate_governance')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function edit($id)
        {
            $data = DB::table('good_corporate_governance')->where('good_corporate_governance.id',$id)->first();
            return view('admin.edit_good_corporate_governance', compact('id','data'));
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
            $data = DB::table('good_corporate_governance')->where('id',$request->id)->first();
		    Storage::delete('good_corporate_governance/'.$data->gambar);
            $rename = str_replace(' ','_',$gambar->getClientOriginalName());
            $nama_gambar = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'good_corporate_governance';
            $gambar->storeAs($tujuan_upload,$nama_gambar);
            //DOKUMEN
            $data = DB::table('good_corporate_governance')->where('id',$request->id)->first();
		    Storage::delete('good_corporate_governance/'.$data->dokumen);
            $rename = str_replace(' ','_',$dokumen->getClientOriginalName());
            $nama_dokumen = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'good_corporate_governance';
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
            $data = DB::table('good_corporate_governance')->where('id',$request->id)->first();
		    Storage::delete('good_corporate_governance/'.$data->gambar);
            $rename = str_replace(' ','_',$gambar->getClientOriginalName());
            $nama_gambar = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'good_corporate_governance';
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
            $data = DB::table('good_corporate_governance')->where('id',$request->id)->first();
		    Storage::delete('good_corporate_governance/'.$data->dokumen);
            $rename = str_replace(' ','_',$dokumen->getClientOriginalName());
            $nama_dokumen = time()."_".$rename;
                    // isi dengan nama folder tempat kemana foto diupload
            $tujuan_upload = 'good_corporate_governance';
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
        DB::table('good_corporate_governance')->where('id',$request->id)->update($form_data);
        return  redirect('crud_good_corporate_governance')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function download_gambar($id)
        {
            $data = DB::table('good_corporate_governance')->where('good_corporate_governance.gambar',$id)->first();
            if (Storage::disk('public')->exists("good_corporate_governance/$data->gambar"))
            {
                $path = Storage::disk('public')->path("good_corporate_governance/$data->gambar");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    public function download_dokumen($id)
        {
            $data = DB::table('good_corporate_governance')->where('good_corporate_governance.dokumen',$id)->first();
            if (Storage::disk('public')->exists("good_corporate_governance/$data->dokumen"))
            {
                $path = Storage::disk('public')->path("good_corporate_governance/$data->dokumen");
                $content = file_get_contents($path);
                return response($content)->withHeaders([
                    'Content-Type'=> mime_content_type($path)
                ]);
            }
            return redierct('/404');        
        }
    
    public function destroy($id)
        {
            $data = GoodCorporateGovernance::findOrFail($id);
           
            if (Storage::exists('good_corporate_governance/'.$data->dokumen))
                {    
                    Storage::delete('good_corporate_governance/'.$data->gambar);
                    Storage::delete('good_corporate_governance/'.$data->dokumen);
                    $data->delete();
                }
            else
                {
                    return response()->json(['error' => 'Data Tidak Ditemukan.']);
                } 
        }
}
