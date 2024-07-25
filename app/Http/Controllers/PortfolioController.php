<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function Storedata(Request $request)
    {
        $request->validate([
            'hp_img' => 'required|image|mimes:png,jpg|max:2048',
            'ap_resume' => 'required|mimes:pdf|max:512',
            'ap_name' => 'required',
            'ap_role' => 'required',
            'ap_desc' => 'required',
            'skill' => 'required',
            'percentage' => 'required',
            'hp_name' => 'required',
            'hp_desc' => 'required',
            'linkname' => 'required',
            'link' => 'required',
            'roles' => 'required',
            'op_name' => 'required',
            'w_title1' => 'required',
            'w_title2' => 'required',
            'w_desc' => 'required',
            'cp_name' => 'required',
            'cp_phone' => 'required',
            'cp_email' => 'required',
            'cp_address' => 'required',
        ]);

        // About page
        $ap_name = $request->input('ap_name');
        $ap_role = $request->input('ap_role');
        $ap_resume = $request->input('ap_resume');
        $ap_desc = $request->input('ap_desc');

        $skill = $request->input('skill');
        $percentage = $request->input('percentage');

        // home page
        $hp_name = $request->input('hp_name');
        $hp_desc = $request->input('hp_desc');
        $roles = implode(',', $request->input('roles'));

        $link = $request->input('link');
        $linkname = $request->input('linkname');

        // own page
        $op_name = $request->input('op_name');
        $w_title1 = $request->input('w_title1');
        $w_title2 = $request->input('w_title2');
        $w_desc = $request->input('w_desc');

        // contact page
        $cp_name = $request->input('cp_name');
        $cp_phone = $request->input('cp_phone');
        $cp_email = $request->input('cp_email');
        $cp_address = $request->input('cp_address');
    }
}
