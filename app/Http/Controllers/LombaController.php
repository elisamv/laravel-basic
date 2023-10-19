<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lomba;

class LombaController extends Controller
{

    public function index()
{
    $lomba = Lomba::all(); // Mengambil semua data kelas dari database

    return view('beranda', [
        'title' => 'Beranda',
        'kelas' => $lomba, // Meneruskan data kelas ke tampilan
    ]);
}
    public function create()
    {
        return view('lomba.create', ['title' => 'Tambah Lomba']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lomba' => 'required',
            'image' => 'required|image', // Pastikan ini adalah tipe gambar yang diizinkan
            'status' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $imageName);
            $validatedData['gambar'] = $imageName;
        }

        Lomba::create($validatedData);

        return redirect('/')->with('success', 'Data Lomba berhasil ditambahkan.');
    }



/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lomba $kelas)
{
    $title = 'Detail Mata Lomba - ' . $kelas->matkul; // Inisialisasi variabel $title
    return view('.show', compact('kelas', 'title'));
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lomba $kelas)
{
    $title = 'Edit Lomba - ' . $kelas->matkul; // Inisialisasi variabel $title
    return view('edit', compact('kelas', 'title'));
}



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lomba $kelas)
{
    // Validasi data jika diperlukan
    
    $kelas->update([
        'nama_lomba' => $request->input('nama_lomba'),
        'status' => $request->input('status'),
        // Update atribut lainnya sesuai kebutuhan
    ]);

    return redirect()->route('kelas.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lomba $kelas)
{
    $kelas->delete(); // Hapus data kelas dari database

    return redirect()->route('kelas.index')
        ->with('success', 'Kelas berhasil dihapus');
}

}