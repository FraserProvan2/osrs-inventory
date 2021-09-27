<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Increase/Decrease likes
     * 
     * @param int $id
     * @return JSON response
     */
    public function action($id)
    {
        $inventory = Inventory::find($id);
        $check = Like::where('inventory_id', $id)
            ->where('user_id', auth()->id())
            ->first();

        if ($check) {
            Like::where('inventory_id', $id)
                ->where('user_id', auth()->id())
                ->delete();
            $inventory->decreaseLikes();

            return response()->json([
                'action' => "unliked"
            ], 200);
        } else {
            Like::create([
                'user_id' => auth()->id(),
                'inventory_id' => $id
            ]);
            $inventory->increaseLikes();

            return response()->json([
                'action' => "liked"
            ], 200);
        }
    }
}
