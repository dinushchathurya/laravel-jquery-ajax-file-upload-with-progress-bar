<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;

class FileUploadController extends Controller
{
    /* show file upload view */
    public function index()
    {
        return view('welcome');
    }
}
