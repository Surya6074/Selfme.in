<?php

namespace App\Http\Controllers;

use App\Models\Aboutpage;
use App\Models\Contactpage;
use App\Models\Homepage;
use App\Models\Link;
use App\Models\Ownpage;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;

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

        // home page
        $home_page = new Homepage();
        $home_page->hp_name = $request->input('hp_name');
        $home_page->hp_desc = $request->input('hp_desc');
        $home_page->user_id = auth()->user()->id;
        $home_page->hp_roles =  implode(',', $request->input('roles'));
        // home page image
        $hp_orginal_img = $request->file('hp_img');
        $imgoriginalname = $hp_orginal_img->getClientOriginalName();
        $imgname = time() . $imgoriginalname;
        $hp_orginal_img->move('selfme_assets/users_img/', $imgname);
        $home_page->hp_img = $imgname;

        $home_page->save();
        // links
        $link = $request->input('link');
        $linkname = $request->input('linkname');
        for ($i = 0; $i < count($link); $i++) {
            $linklist = new Link();
            $linklist->user_id = auth()->user()->id;
            $linklist->link_name = $linkname[$i];
            $linklist->link = $link[$i];
            $linklist->save();
        }
        // About page
        $about_page = new Aboutpage();
        $about_page->user_id = auth()->user()->id;
        $about_page->ap_name = $request->input('ap_name');
        $about_page->ap_role = $request->input('ap_role');
        $about_page->ap_desc = $request->input('ap_desc');

        // home page image
        $ap_orginal_pdf = $request->file('ap_resume');
        $pdforiginalname = $ap_orginal_pdf->getClientOriginalName();
        $pdfname = time() . $pdforiginalname;
        $ap_orginal_pdf->move('selfme_assets/users_resume/', $pdfname);
        $about_page->ap_resume = $pdfname;
        $about_page->save();

        // skill page
        $skill = $request->input('skill');
        $percentage = $request->input('percentage');
        for ($i = 0; $i < count($skill); $i++) {
            $skilllist = new Skill();
            $skilllist->user_id = auth()->user()->id;
            $skilllist->skill_name = $skill[$i];
            $skilllist->skill_percentage = $percentage[$i];
            $skilllist->save();
        }

        // own page
        $op_name = $request->input('op_name');
        $w_title1 = $request->input('w_title1');
        $w_title2 = $request->input('w_title2');
        $w_desc = $request->input('w_desc');
        for ($i = 0; $i < count($w_title1); $i++) {
            $w_titlelist = new Ownpage();
            $w_titlelist->user_id = auth()->user()->id;
            $w_titlelist->w_title1 = $w_title1[$i];
            $w_titlelist->w_title2 = $w_title2[$i];
            $w_titlelist->w_desc = $w_desc[$i];
            $w_titlelist->op_name = $op_name;
            $w_titlelist->save();
        }

        // contact page
        $contact_page = new Contactpage();
        $contact_page->user_id = auth()->user()->id;
        $contact_page->cp_name = $request->input('cp_name');
        $contact_page->cp_phoneno = $request->input('cp_phone');
        $contact_page->cp_email = $request->input('cp_email');
        $contact_page->cp_address = $request->input('cp_address');
        $contact_page->save();


        return redirect('/home');
    }

    public function Getdataui()
    {
        // $id = auth()->user()->id;
        $id = 1;
        $homepages = Homepage::where('user_id', $id)->get();
        $aboutpages = Aboutpage::where('user_id', $id)->get();
        $contactpages = Contactpage::where('user_id', $id)->get();
        $ownpages = Ownpage::where('user_id', $id)->get();
        $skills = Skill::where('user_id', $id)->get();
        $links = Link::where('user_id', $id)->get();

        $ownpagetitle = Ownpage::where('user_id', $id)->select('op_name')->first();

        // dd($links);

        return view('editdata', compact('homepages', 'aboutpages', 'contactpages', 'ownpages', 'ownpagetitle', 'skills', 'links'));
    }


    public function ValidateUsername(Request $request)
    {
        $name = $request->input('name');
        $data = Count(User::where('name', $name)->select('name')->get());
        return response()->json(['msg' => 'success', 'data' => $data]);
    }
}
