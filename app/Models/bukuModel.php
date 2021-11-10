<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class bukuModel extends Model
{
    public function allData(){
        return DB::table('buku')->orderBy('judul','asc')->paginate(10);
    }

    public function addData ($data){
        DB::table('buku')->insert($data);
    }
    public function detaildata($id){
        return DB::table('buku')->where('id', $id)->first();
    }

    public function deleteData($id){
        DB::table('buku')
        ->where('id', $id)
        ->delete();
    }

    public function editData($id,$data){
        DB::table('buku')->where('id', $id)->update($data);
    }
}
