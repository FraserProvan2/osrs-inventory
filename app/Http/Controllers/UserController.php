<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        return view('user.show', [
            'user' => $user = User::where('url', $url)->firstOrFail(),
            'inventories' => Inventory::where('user_id', $user->id)->paginate(7),
            'likes' => $user->getLikedInventories()
        ]);
    }
}
