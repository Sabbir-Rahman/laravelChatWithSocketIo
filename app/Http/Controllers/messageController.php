<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\This;

class messageController extends Controller
{
    //
    public function conversation($userId) {

        $users = User::where('id', '!=', Auth::id())->get();
        $friendInfo = User::findOrFail($userId);
        $myInfo = User::find(Auth::id());

        $this->data['users']= $users;
        $this->data['friendInfo']= $friendInfo;
        $this->data['myInfo']= $myInfo;
        $this->data['userId']= $userId;

        return view("conversation",$this->data);

    }
}
