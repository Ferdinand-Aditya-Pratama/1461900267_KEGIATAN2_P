<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class SelectLikeController extends Controller
{
    $selik = Buku::join('kategori', 'buku.kategori_id', 'kategori.kategori_id')
    ->select('buku.buku_judul', 'kategori.kategori_nama', 'buku.buku_deskripsi')
    ->where('kategori_nama', 'Like', 'Umum')
    ->get();
    return view('tampilanSe0267', ['selikedata' => $selik]);
}
