<?php

namespace App\Http\Controllers;

use App\Models\Posjaga;
use Illuminate\Http\Request;
class PosjagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $posjagas = Posjaga::latest()->paginate(10);
        return view('pengurus.Posjaga.index', compact('posjagas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengurus.Posjaga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaPos' => 'required',
            'deskripsiPos' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        Posjaga::create([
            'namaPos' => $request->namaPos,
            'deskripsiPos' => $request->deskripsiPos,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect()->route('posjaga.index')
            ->with('success','Pos jaga berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posjaga $posjaga)
    {
        return view('pengurus.Posjaga.show',compact('posjaga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posjaga $posjaga)
    {
        return view('pengurus.Posjaga.edit',compact('posjaga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posjaga $posjaga)
    {
        $request->validate([
            'namaPos' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
        $posjaga->update([
            'namaPos' => $request->namaPos,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect()->route('posjaga.index')
            ->with('success','Pos jaga berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posjaga $posjaga)
    {
        $posjaga->delete();
        return redirect()->route('posjaga.index')
            ->with('success','Pos jaga berhasil dihapus');
    }
}
