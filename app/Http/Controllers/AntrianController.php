<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAntrianRequest;
use App\Http\Requests\UpdateAntrianRequest;
use App\Models\Antrian;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listAntrian = Antrian::where('status', 'Q')
            ->take(10)
            ->get();
        $currentAntrian = Antrian::where('status', 'P')->first();
        return view('dashboard', compact(['listAntrian', 'currentAntrian']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAntrianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Antrian $antrian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Antrian $antrian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAntrianRequest $request, Antrian $antrian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Antrian $antrian)
    {
        //
    }

    public function getCurrentAntrian()
    {
        $currentAntrian = Antrian::where('status', 'P')->first();
        $listNextAntrian = Antrian::where('status', 'Q')
            ->take(10)
            ->get();

        return response()->json([
            'current_id' => $currentAntrian->id,
            'current_antrian' => $currentAntrian->nomor,
            'list_next_antrian' => $listNextAntrian,
        ]);
    }
}
