<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prevAntrian = Antrian::where('status', 'D')->orderBy('id', 'DESC')->first();
        $currentAntrian = Antrian::where('status', 'P')->first();
        if ($currentAntrian == null) {
            Antrian::where('status', 'Q')->first()->update(['status' => 'P']);
            $currentAntrian = Antrian::where('status', 'P')->first();
        }
        $nextAntrian = Antrian::where('status', 'Q')->orderBy('id', 'ASC')->first();

        return view('admin-dashboard', compact(['prevAntrian', 'currentAntrian', 'nextAntrian']));
        //return view('home');
    }

    public function antrianDone(Request $request)
    {
        Antrian::find($request->id_antrian)->update(['status' => 'D']);

        $nextAntrian = Antrian::where('status', 'Q')->first();
        Antrian::find($nextAntrian->id)->update(['status' => 'P']);

        $prevAntrian = Antrian::where('status', 'D')
            ->orderBy('id', 'DESC')->first();

        $currentAntrian = Antrian::where('status', 'P')->first();

        $nextAntrian = Antrian::where('status', 'Q')
            ->orderBy('id', 'ASC')->first();

        return response()->json([
            'prev_id' => $prevAntrian->id,
            'prev_antrian' => $prevAntrian->nomor,
            'current_id' => $currentAntrian->id,
            'current_antrian' => $currentAntrian->nomor,
            'next_id' => $nextAntrian->id,
            'next_antrian' => $nextAntrian->nomor,
        ]);
    }

    public function listAntrian(Request $request)
    {
        $data = Antrian::select('*');
        return DataTables::of($data)
                ->addIndexColumn()
                ->escapeColumns([])->toJson();
    }
}
