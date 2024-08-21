<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{
    public function inputBuku(Request $request)
    {
        buku::create([
            'judul_buku' => $request->input('judul'),
            'pengarang' => $request->input('pengarang'),
            'penerbit' => $request->input('penerbit')
        ]);
        return redirect('/tampil-buku');
    }

    public function updateBuku(Request $request)
    {
        $buku = buku::find($request->input('id'));
        $buku->update([
            'judul_buku' => $request->input('judul'),
            'pengarang' => $request->input('pengarang'),
            'penerbit' => $request->input('penerbit')
        ]);
        return redirect('/tampil-buku');
    }

    public function deleteBuku(Request $request)
    {
        $buku = buku::find($request->input('id'));
        $buku->delete();
        return redirect('/tampil-buku');
    }
}
