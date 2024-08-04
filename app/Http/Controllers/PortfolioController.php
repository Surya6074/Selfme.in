<?php

namespace App\Http\Controllers;

use App\Models\Aboutpage;
use App\Models\Contactpage;
use App\Models\Homepage;
use App\Models\Link;
use App\Models\Ownpage;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;

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
            'skill.*' => 'required',
            'percentage.*' => 'required',
            'hp_name' => 'required',
            'hp_desc' => 'required',
            'linkname.*' => 'required',
            'link.*' => 'required',
            'roles.*' => 'required',
            'op_name' => 'required',
            'w_title1.*' => 'required',
            'w_title2.*' => 'required',
            'w_desc.*' => 'required',
            'cp_name' => 'required',
            'cp_phone' => 'required',
            'cp_email' => 'required',
            'cp_address' => 'required',
        ], [
            'ap_name.required' => 'About -> Name Field is Required!',
            'ap_role.required' => 'About -> Role Field is Required!',
            'ap_desc.required' => 'About -> Decription Field is Required!',
            'hp_name.required' => 'Home -> Name Field is Required!',
            'hp_desc.required' => 'Home -> Description Field is Required!',
            'linkname.required' => 'Linkname Field is Required!',
            'link.required' => 'Link Field is Required!',
            'roles.required' => 'Roles Field is Required!',
            'op_name.required' => 'Own page -> Name Field is Required!',
            'w_title1.required' => 'Own page Title 1 Field is Required!',
            'w_title2.required' => 'Own page Title 2 Field is Required!',
            'w_desc.required' => 'Own page desc Feild is Required',
            'cp_name.required' => 'Contact -> Name Field is Required!',
            'cp_phone.required' => 'Contact -> Phone Field is Required!',
            'cp_email.required' => 'Contact -> Email Field is Required!',
            'cp_address.required' => 'About -> Address Field is Required!',
            'skill.required' => 'Skills Feild is Required',
            'percentage.required' => 'Percentage Feild is Required',
            'ap_resume.required' => 'About -> Resume Field is Required!',
            'ap_resume.mimes' => 'File type should be : .pdf',
            'ap_resume.max' => 'File size is below 512kb',
            'hp_img.required' => 'Image is Required!',
            'hp_img.image' => 'Image should be a Image',
            'hp_img.mimes' => 'Image type should be a .png , .jpg',
            'hp_img.max' => 'Image size is below 2MB',
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

        // set a default template

        $template = new Portfolio();
        $template->user_id = auth()->user()->id;
        $template->template_id = 1;
        $template->visibility = 'public';
        $template->save();

        return redirect(route('homeui'));
    }

    public function Updatedata(Request $request)
    {
        $request->validate([
            'hp_img' => 'image|mimes:png,jpg|max:2048',
            'ap_resume' => 'mimes:pdf|max:512',
            'ap_name' => 'required',
            'ap_role' => 'required',
            'ap_desc' => 'required',
            'skill.*' => 'required',
            'percentage' => 'required',
            'hp_name' => 'required',
            'hp_desc' => 'required',
            'linkname' => 'required',
            'link.*' => 'required',
            'roles' => 'required',
            'op_name' => 'required',
            'w_title1.*' => 'required',
            'w_title2.*' => 'required',
            'w_desc.*' => 'required',
            'cp_name' => 'required',
            'cp_phone' => 'required',
            'cp_email' => 'required',
            'cp_address' => 'required',
        ], [
            'ap_name.required' => 'About -> Name Field is Required!',
            'ap_role.required' => 'About -> Role Field is Required!',
            'ap_desc.required' => 'About -> Decription Field is Required!',
            'hp_name.required' => 'Home -> Name Field is Required!',
            'hp_desc.required' => 'Home -> Description Field is Required!',
            'linkname.required' => 'Linkname Field is Required!',
            'link.required' => 'Link Field is Required!',
            'roles.required' => 'Roles Field is Required!',
            'op_name.required' => 'Own page -> Name Field is Required!',
            'w_title1.required' => 'Own page Title 1 Field is Required!',
            'w_title2.required' => 'Own page Title 2 Field is Required!',
            'w_desc.required' => 'Own page desc Feild is Required',
            'cp_name.required' => 'Contact -> Name Field is Required!',
            'cp_phone.required' => 'Contact -> Phone Field is Required!',
            'cp_email.required' => 'Contact -> Email Field is Required!',
            'cp_address.required' => 'About -> Address Field is Required!',
            'skill.required' => 'Skills Feild is Required',
            'percentage.required' => 'Percentage Feild is Required',
            'ap_resume.required' => 'About -> Resume Field is Required!',
            'ap_resume.mimes' => 'File type should be : .pdf',
            'ap_resume.max' => 'File size is below 512kb',
            'hp_img.required' => 'Image is Required!',
            'hp_img.image' => 'Image should be a Image',
            'hp_img.mimes' => 'Image type should be a .png , .jpg',
            'hp_img.max' => 'Image size is below 2MB',
        ]);
        $id = $request->input('selfme_user_id');
        // home page
        $home_page = Homepage::where('user_id', $id)->first();
        $home_page->hp_name = $request->input('hp_name');
        $home_page->hp_desc = $request->input('hp_desc');
        $home_page->hp_roles =  implode(',', $request->input('roles'));

        // home page image
        if ($request->has('hp_img')) {
            $hp_orginal_img = $request->file('hp_img');
            $imgoriginalname = $hp_orginal_img->getClientOriginalName();
            $imgname = time() . $imgoriginalname;
            $hp_orginal_img->move('selfme_assets/users_img/', $imgname);
            $home_page->hp_img = $imgname;
        } else {
            $home_page->hp_img = $request->input('hp_img_name');
        }
        $home_page->save();

        // links
        $link = $request->input('link');
        $linkname = $request->input('linkname');
        $linklists = Link::where('user_id', $id)->get();
        foreach ($linklists as $linkindex => $linklist) {
            if (isset($linkname[$linkindex]) && isset($link[$linkindex])) {
                $linklist->link_name = $linkname[$linkindex];
                $linklist->link = $link[$linkindex];
                $linklist->save();
            }
        }

        // // About page
        $about_page = Aboutpage::where('user_id', $id)->first();
        $about_page->ap_name = $request->input('ap_name');
        $about_page->ap_role = $request->input('ap_role');
        $about_page->ap_desc = $request->input('ap_desc');
        // About page resume
        if ($request->has('ap_resume')) {
            $ap_orginal_pdf = $request->file('ap_resume');
            $pdforiginalname = $ap_orginal_pdf->getClientOriginalName();
            $pdfname = time() . $pdforiginalname;
            $ap_orginal_pdf->move('selfme_assets/users_resume/', $pdfname);
            $about_page->ap_resume = $pdfname;
        } else {
            $about_page->ap_resume = $request->input('ap_resume_name');
        }
        $about_page->save();

        // skill page
        $skill = $request->input('skill');
        $percentage = $request->input('percentage');
        Skill::where('user_id', $id)->delete();
        for ($i = 0; $i < count($skill); $i++) {
            $skilllist = new Skill();
            $skilllist->user_id = $id;
            $skilllist->skill_name = $skill[$i];
            $skilllist->skill_percentage = $percentage[$i];
            $skilllist->save();
        }

        // // own page
        $op_name = $request->input('op_name');
        $w_title1 = $request->input('w_title1');
        $w_title2 = $request->input('w_title2');
        $w_desc = $request->input('w_desc');
        Ownpage::where('user_id', $id)->delete();
        for ($i = 0; $i < count($w_title1); $i++) {
            $w_titlelist = new Ownpage();
            $w_titlelist->user_id = $id;
            $w_titlelist->w_title1 = $w_title1[$i];
            $w_titlelist->w_title2 = $w_title2[$i];
            $w_titlelist->w_desc = $w_desc[$i];
            $w_titlelist->op_name = $op_name;
            $w_titlelist->save();
        }


        // // contact page
        $contact_page = Contactpage::where('user_id', $id)->first();
        $contact_page->cp_name = $request->input('cp_name');
        $contact_page->cp_phoneno = $request->input('cp_phone');
        $contact_page->cp_email = $request->input('cp_email');
        $contact_page->cp_address = $request->input('cp_address');
        $contact_page->save();


        return redirect(route('homeui'));
    }

    public function DeleteUser(Request $request)
    {
        $id = $request->input('user_id');
        Homepage::where('user_id', $id)->delete();
        Aboutpage::where('user_id', $id)->delete();
        Contactpage::where('user_id', $id)->delete();
        Ownpage::where('user_id', $id)->delete();
        Skill::where('user_id', $id)->delete();
        Link::where('user_id', $id)->delete();
        Portfolio::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
        return redirect(route('indexui'));
    }

    public function GetUserdata()
    {
        $id = auth()->user()->id;
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

    public function ShowPortfolio($username)
    {
        $id = User::where('username', $username)->first();
        if (isset($id)) {
            $portfolio_user = Portfolio::where('user_id', $id->id)->first();
            if (isset($portfolio_user)) {
                if ($portfolio_user->visibility == 'public') {
                    $homepages = Homepage::where('user_id', $id->id)->get();
                    $aboutpages = Aboutpage::where('user_id', $id->id)->get();
                    $contactpages = Contactpage::where('user_id', $id->id)->get();
                    $ownpages = Ownpage::where('user_id', $id->id)->get();
                    $skills = Skill::where('user_id', $id->id)->get();
                    $links = Link::where('user_id', $id->id)->get();
                    $skillscount = Count($skills);
                    return view('templates.template1', compact('homepages', 'aboutpages', 'contactpages', 'ownpages', 'skills', 'links', 'skillscount'));
                } else {
                    return view('others.PrivatePortfolio');
                }
            } else {
                return view('others.PortfolioNotupdate');
            }
        } else {
            return view('others.UserNotFound');
        }
    }

    public function ChangeVisibility(Request $request)
    {
        $id = $request->input('user_id');
        $visibility = $request->input('visibility');
        $user_portfolio = Portfolio::where('user_id', $id)->first();
        $user_portfolio->visibility = $visibility;
        $user_portfolio->save();
        return response()->json(['msg' => 'success', 'data' => $visibility]);
    }


    public function ValidateUsername(Request $request)
    {
        $name = $request->input('name');
        $data = Count(User::where('username', $name)->get());
        return response()->json(['msg' => 'success', 'data' => $data]);
    }

    public function test(Request $request)
    {

        return view('templates.template1');
    }
}
