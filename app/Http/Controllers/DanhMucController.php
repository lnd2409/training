<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DanhMucController extends Controller
{

    public function danhSach() {
        // select * from danh_muc
        $danhSachDanhMuc = DB::table('danh_muc')->get();
        return view('danh-sach', compact('danhSachDanhMuc'));
    }


    public function index() {


        //cú pháp
        DB::table('<bang_hien_tai>')
        ->join('<bang_chua_khoa_ngoai>','<bang_chua_khoa_ngoai>.<ten_khoa_chinh_cua_bang>','<bang_hien_tai>.<ten_khoa_ngoai>')
        ->get();
        // vd:
        $danhSach = DB::table('sanpham')->join('loaisanpham','loaisanpham.lsp_id','sanpham.lsp_id')->get();


        return view('danh-muc');
    }

    public function store(Request $request) {
        $tenDanhMuc = $request->tenDanhMuc;
        $moTa = $request->moTa;
        $insert = DB::table('danh_muc')->insert(
            [
                'dm_ten' => $tenDanhMuc,
                'dm_mota' => $moTa
            ]
        );
        dd('Thêm thành công');
    }

    public function xinChao() {
        $hi = 'hello class';
        return $hi;
    }
}
