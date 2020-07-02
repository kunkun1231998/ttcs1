<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WebStructureController extends Controller
{
    public function index()
    {
        return view('admin.structure.index');
    }

    public function updatePostPagePostLength(Request $request)
    {
        $data = array_diff_key(
            $request->all(),
            ['_token' => 1, '_method' => 1]
        );
        $result = true;
        foreach ($data as $key => $item) {
            $old_setting = DB::table('settings')->where('name', $key)->first();
            if (!empty($old_setting)) {
                if ($old_setting->value != $item) {
                    if (!DB::table('settings')->where('name', $key)->update(['value'=> $item])) {
                        $result = false;
                    }
                }
            } else {
                if (!DB::table('settings')->insert(['name' => $key,'value' => $item])) {
                    $result = false;
                }
            }
        }
        if ($result) {
            Session::flash('flash_success','Cập nhật thành công.');
           return redirect()->back();
        }
        Session::flash('flash_err','Cập nhật thất bại');
        return redirect()->back();
    }
}
