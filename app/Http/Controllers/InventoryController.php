<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Like;
use App\Services\InventoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $inventories = Inventory::query();

        if ($request->has('search')) {
            $inventories->where('name','LIKE','%' . $request->get('search') . '%');
        }

        return view('inventory.index', [
            'inventories' => $inventories->paginate(3),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        if(isset($request->json) && !InventoryService::validJsonImport($request->json)) {
            return back()->withErrors(['json' => 'JSON is not valid']);
        }

        $inventory = Inventory::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
            'data' => InventoryService::mergedImportedOrNew($request->json)
        ]);

        return Redirect('inventories/' . $inventory->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::findOrFail($id);
        $is_author = false;
        if (Auth::user() && Auth::user()->id == $inventory->user_id) {
            $is_author = true;
        }

        return view('inventory.show', [
            'inventory' => $inventory,
            'liked' => (Like::userHasLiked($id) ? 1 : 0),
            'is_edit' => $is_author
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Json\Response
     */
    public function update(Request $request, $id)
    {
        $inventory = Inventory::findOrFail($id);

        if ($inventory->user_id != Auth::user()->id) {
            return response()->json('Unauthorized.', 400);
        }

        $inventory->data = $request->all();
        $inventory->save();

        return response()->json([]);
    }

    /**
     * Updates the name
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Json\Response
     */
    public function updateName(Request $request, $id)
    {
        $request->validate(['name' => 'required']);

        $inventory = Inventory::findOrFail($id);
        if ($inventory->user_id != Auth::user()->id) {
            return response()->json('Unauthorized.', 400);
        }

        $inventory->name = $request->get('name');
        $inventory->save();

        return response()->json([]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Json\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);

        if ($inventory->user_id != Auth::user()->id) {
            return response()->json('Unauthorized.', 400);
        }

        $inventory->delete();

        return response()->json([]);
    }
}
