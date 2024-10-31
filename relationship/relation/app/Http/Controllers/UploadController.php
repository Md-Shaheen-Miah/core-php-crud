<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Upload;
use App\Http\Requests\StoreUploadRequest;
use App\Http\Requests\UpdateUploadRequest;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('file-upload');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048', // 2MB পর্যন্ত ফাইল অনুমোদিত
        ]);

        // ফাইল আপলোড এবং নাম ও পাথ সংগ্রহ
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName(); // ফাইলের আসল নাম
        $path = $file->store('uploads'); // স্টোরেজ পাথ

        // ফাইলের নাম এবং পাথ ডাটাবেজে সেভ করা
        Upload::create([
            'name' => $fileName,
            'path' => $path,
        ]);

        return back()->with('success', 'ফাইল সফলভাবে আপলোড এবং ডাটাবেজে সেভ করা হয়েছে: ' . $path);
    }
    /**
     * Display the specified resource.
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUploadRequest $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
