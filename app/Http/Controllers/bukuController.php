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
}
