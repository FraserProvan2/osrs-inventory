<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Like;
use App\Services\InventoryService;
use Illuminate\Http\Request;
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

        Inventory::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
            'data' => InventoryService::mergedImportedOrNew($request->json)
        ]);

        // TODO: store

        // TODO: redirect to new inventory via url (in edit mode)

        return Redirect('inventories'); // temp
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $liked = 0;
        $check = Like::where('inventory_id', $id)
            ->where('user_id', auth()->id())
            ->first();
        if ($check) $liked = 1;

        return view('inventory.show', [
            'inventory' => Inventory::findOrFail($id),
            'liked' => $liked,
            'is_edit' => true
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
