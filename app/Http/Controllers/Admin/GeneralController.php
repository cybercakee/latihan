<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    function about() {
        $title = 'Tentang saya';
        return view('frontend.pages.about.index', [
            'title_page' => $title
        ]);
    }
    function experience()
    {
        $title = 'Pengalaman';
        return view('frontend.pages.exp.index', [
            'title_page' => $title
        ]);
    }
    function education()
    {
        $title = 'Pendidikan';
        return view('frontend.pages.education.index', [
            'title_page' => $title
        ]);
    }
    function interest()
    {
        $title = 'Pendidikan';
        return view('frontend.pages.interest.index', [
            'title_page' => $title
        ]);
    }
    function award()
    {
        $title = 'Penghargaan';
        return view('frontend.pages.award.index', [
            'title_page' => $title
        ]);
    }
    function skill()
    {
        $title = 'Skill dan Pengalaman';
        return view('frontend.pages.skill.index', [
            'title_page' => $title
        ]);
    }

}
