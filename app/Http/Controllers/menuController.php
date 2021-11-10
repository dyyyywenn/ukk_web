<?php

namespace App\Http\Controllers;

use App\Models\menuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class menuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user');
        $this->menuModel = new menuModel();
    }
    public function index()
    {
    
        $data = [
            'menu' => $this->menuModel->allData(),
        ];
            return view('v_menuUser',$data);
        
        
    }
    

    public function search(Request $request){
       $search = $request->get('search');
       $data = [
        'menu' =>DB::table('buku')->where('judul', 'like', '%' .$search. '%')->paginate(5)
    ];
       return view('v_menuUser', $data);
    }


    public function detail($id){
        $data = [
            'menu' => $this->menuModel->detailData($id),
        ];
            return view('v_detail',$data);
        
    }
  
    
}
