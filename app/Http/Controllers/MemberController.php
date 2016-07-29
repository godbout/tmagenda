<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('member.index', ['members' => $members]);
    }
}
