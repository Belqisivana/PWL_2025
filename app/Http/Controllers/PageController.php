<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function SelamatDatang() {
        return 'Selamat Datang';
}

    public function about() {
    return 'Nama: Belqis Ivana Fidelia Arfany <br> Nim: 2341760075';
}

    public function articles($id){
    return "Id ke- " . $id;
}
}
