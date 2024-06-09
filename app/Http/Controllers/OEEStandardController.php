<?php

namespace App\Http\Controllers;

use App\Models\OEEStandard;
use Illuminate\Http\Request;

class OEEStandardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = OEEStandard::all();

        return view('pages.oee-standard.index', [
            'items' => $items,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = OEEStandard::findOrFail($id);
        $item->update($data);

        return redirect()->route('oee-standard.index');
    }
}
