<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->paginate(10);
        return view('admin.member.index', compact('members'));
    }


    public function show(Member $member)
    {
        return view('admin.member.show', compact('member'));
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('admin.members.index')->with('message', 'Delete Successfully');
    }
}
