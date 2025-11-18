<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    // GET semua lokasi
    public function index()
    {
        return Lokasi::all();
    }

    // POST tambah lokasi
    public function store(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required',
            'alamat' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        return Lokasi::create($request->all());
    }

    // GET detail lokasi berdasarkan id
    public function show($id)
    {
        return Lokasi::findOrFail($id);
    }

    // PUT update lokasi
    public function update(Request $request, $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->update($request->all());

        return $lokasi;
    }

    // DELETE hapus lokasi
    public function destroy($id)
    {
        return Lokasi::destroy($id);
    }
}