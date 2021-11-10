<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class menuModel extends Model
{
    public function allData(){
        return DB::table('buku')->orderBy('judul','asc')->paginate(10);
    }

    public function detailData($id){
        return DB::table('buku')->where('id', $id)->get();
    }

    
    
    
}
