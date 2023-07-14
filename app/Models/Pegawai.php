<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use App\Models\Model;
use Illuminate\Support\Str;

class Pegawai extends ModelAuthenticate
{
    protected $table ="pegawai";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "berita";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
