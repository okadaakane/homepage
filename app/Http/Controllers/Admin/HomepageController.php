<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

use App\Movie;

/* コントローラーは.で区切る */
class HomepageController extends Controller
{
    public function access()
    {
        return view('admin.homepage.access');
    }
    
    public function insta()
    {
       return view('admin.homepage.insta');
    }
    
    public function introduction()
    {
       return view('admin.homepage.introduction');
    }
    
    public function youtube()
    {
       return view('admin.homepage.youtube');
    }
    public function contact()
    {
        return view('admin.homepage.contact');
    }
        public function response()
    {
        return view('admin.homepage.response');
    }
     public function submit()
    {
        return view('admin/homepage/submit');
    }
    public function success()
    {
        return redirect('admin/homepage/success');
    }
    //  \Debugbar::info();
}
?>