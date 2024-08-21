<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class viewController extends Controller
{
    public function index()
    {
        return view('input-buku');
    }

    public function tampilBuku()
    {
        $data = [
            "buku" => buku::all(),
        ];

        return view('tampil-buku', $data);
    }

    public function updateBuku($id)
    {
        $data = [
            "buku" => buku::find($id),
        ];
        return view('update-buku', $data);
    }
}
