<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Usulanbaru extends ModelAuthenticate
{
    protected $table ="penelitian_usulanbaru";

    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "formatproposal" . $field;   
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }
}
