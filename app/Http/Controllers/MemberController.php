<?php
namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = ['Sayyid', 'Zhilan', 'Luthfi', 'Juneo', 'Lukman'];
        return view('members.index', compact('members'));
    }
}