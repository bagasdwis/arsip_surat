<?php

namespace App\Http\Controllers\Surat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

use App\Models\Surat;
use App\Models\Kategori;
use Validator;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::all();
        $kategori = Kategori::all();
        return view('surat.index', compact('surat','kategori'));
    }

    public function cari(Request $request)
    {
        $keyword = $request->cari;
        $surat = Surat::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('surat.index', compact('surat'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('surat.create', compact('kategori'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make(
            $request->all(), [
                'no_surat' => 'required',
                'kategori_id' => 'required|max:100',
                'judul' => 'required|max:100',
                'waktu' => 'required|date',
                'file_surat' => 'required|mimes:pdf|max:10000',
            ],
            );

            $file_surat = $request->file_surat;
            $new_file = time().$file_surat->getClientOriginalName();

            $surat = Surat::create([
                'no_surat' => $request->no_surat,
                'kategori_id' =>  $request->kategori_id,
                'judul' =>  $request->judul,
                'waktu'=>date('Y-m-d H:i:s'),
                'file_surat' => 'file/surat/'.$new_file,
            ]);

            $file_surat->move('file/surat/', $new_file);
            \Session::flash('sukses','Data berhasil disimpan');
            return redirect('/surat');
        }catch (\Exception $surat){
           \Session::flash('gagal','Pastikan semua kolom terisi dengan benar');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::all();
        $surat = Surat::findorfail($id);
        return view('surat.show', compact('surat','kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat = Surat::findorfail($id);
        $kategori = Kategori::all();
        return view('surat.edit', compact('surat','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $validator = Validator::make(
            $request->all(), [
                'no_surat' => 'required',
                'kategori_id' => 'required|max:100',
                'judul' => 'required|max:100',
                'waktu' => 'required|date',
            ],
            );

            $surat = Surat::findorfail($id);

            if ($request->has('file_surat')) {
                $file_surat = $request->file_surat;
                $new_file = time().$file_surat->getClientOriginalName();
                $file_surat->move('file/surat/', $new_file);

            $post_data = [
                'no_surat' => $request->no_surat,
                'kategori_id' =>  $request->kategori_id,
                'judul' =>  $request->judul,
                'waktu'=>date('Y-m-d H:i:s'),
                'file_surat' => 'file/surat/'.$new_file,
            ];
            }
            else{
            $post_data = [
                'no_surat' => $request->no_surat,
                'kategori_id' =>  $request->kategori_id,
                'judul' =>  $request->judul,
                'waktu'=>date('Y-m-d H:i:s'),
            ];
            }
        
            $surat->update($post_data);

            \Session::flash('sukses','Data berhasil diubah');
            return redirect('/surat');
        }catch (\Exception $surat){
            \Session::flash('gagal','Pastikan semua kolom terisi dengan benar');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat = Surat::findorfail($id);
        $surat->delete();

        \Session::flash('sukses','Data berhasil dihapus');
            return redirect('/surat');
    }
}
