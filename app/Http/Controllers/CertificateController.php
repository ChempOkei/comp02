<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    public function index()
    {
        $code = Str::random(11) . 1;

        return response()->json(['course_number' => $code]);
    }
}
