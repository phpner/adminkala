<?php
namespace Phpner\Adminka\Http\Controllers;

class AdminkaController extends AdminBaseController
{

    public function index()
   {
       return view('phpner::views\admin\admin_enter_page');
   }
}
