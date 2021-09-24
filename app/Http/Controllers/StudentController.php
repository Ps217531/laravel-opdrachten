<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class StudentController extends Controller
{
    public function show($naamUitUrl)

    {

        $naamUitUrl = Str::lower($naamUitUrl);

        return view('student', ['naam' => $naamUitUrl]);

    }
}
