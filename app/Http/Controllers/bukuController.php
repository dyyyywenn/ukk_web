<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuModel;
use Illuminate\Support\Facades\DB;

class bukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->bukuModel = new bukuModel();
    }

    public function index(){
        $data = [
            'daftarBuku' => $this->bukuModel->allData(),
        ];
        return view('v_daftarBuku', $data);
    }

    public function add(){
        return view('v_addBuku');
    }

    public function detail($id){
        if (!$this->bukuModel->detailData($id)) {
           abort(404);
        }
        $data = [
            'daftarBuku' => $this->bukuModel->detailData($id),
        ];
        return view('v_daftarBuku', $data);
    }


    public function insert(){
        Request()->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:1024',
        ]);

        $file = Request()->gambar;
        $fileName = Request()->judul.'.'.$file->extension();
        $file->move(public_path('gambar'), $fileName);

        $data = [
            'judul' => Request()->judul,
            'pengarang' => Request()->pengarang,
            'penerbit' => Request()->penerbit,
            'gambar' => $fileName
        ];

        $this->bukuModel->addData($data);
        return redirect()->route('daftarBuku')->with('pesan', 'Data Berhasil Ditambah');
    }

    public function delete($id){
        //hapus foto
        $daftar =  $this->bukuModel->detailData($id);
        if ($daftar->gambar <> "") {
           unlink(public_path('gambar').'/'. $daftar->gambar);
        }
        $this->bukuModel->deleteData($id);
        return redirect()->route('daftarBuku')->with('pesan', 'Data Berhasil Dihapus');
    }
    public function edit($id){
        if (!$this->bukuModel->detailData($id)) {
            abort(404);
         }
        $data = [
            'daftarBuku' => $this->bukuModel->detailData($id),
        ];
        return view('v_editBuku', $data);
    }

    public function update($id){
        Request()->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png|max:1024',
        ]);

        if (Request()->gambar <> '') {
            $file = Request()->gambar;
            $fileName = Request()->judul.'.'.$file->extension();
            $file->move(public_path('gambar'), $fileName);
    
            $data = [
                'judul' => Request()->judul,
                'pengarang' => Request()->pengarang,
                'penerbit' => Request()->penerbit,
                'gambar' => $fileName
            ];
            $this->bukuModel->editData($id,$data);
        }else{
            $data = [
                'judul' => Request()->judul,
                'pengarang' => Request()->pengarang,
                'penerbit' => Request()->penerbit,
                
            ];
            $this->bukuModel->editData($id,$data);
        }       
        return redirect()->route('daftarBuku')->with('pesan', 'Data Berhasil Diupdate');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $data = [
         'daftarBuku' =>DB::table('buku')->where('judul', 'like', '%' .$search. '%')->paginate(5)
     ];
        return view('v_daftarBuku', $data);
     }

}
