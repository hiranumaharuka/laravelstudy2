<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        // 変数をviewに渡す
        //　方法1
        $title = 'Welcome to ProgramindKnowledge';
        return view('pages.index', compact('title'));
    }
    public function about() {
        // 方法2
        // こっちが本番で適用されている
        $title = "About";
        return view('pages.about')->with('title', $title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
