<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Like;
use App\Services\InventoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

        return view('inventory.show', [
            'inventory' => $inventory,
            'liked' => (Like::userHasLiked($id) ? 1 : 0),
            'is_edit' => (Auth::user()->id == $inventory->user_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
