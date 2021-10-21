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

    /* upload file to server*/
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        $name = time().'.'.request()->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $name);

        try {
            $file = new FileUpload;
            $file->name = $name;
            $file->save();

            return response()->json([
                'success'=> true,
                'message'=> 'Successfully uploaded.'
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'success'=> false,
                'message'=> 'Something went wrong'
            ]);
            
        }
       
    }
}
