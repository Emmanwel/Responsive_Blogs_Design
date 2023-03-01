<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;
use Illuminate\Support\Carbon;

class ResumeController extends Controller
{
    //
    public function CreateResume()
    {
        return view('admin.resume.download_resume');
    } // end method

    public function UploadResume(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $fileModel = new Resume;
        if ($req->file()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time() . '_' . $req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }
}
