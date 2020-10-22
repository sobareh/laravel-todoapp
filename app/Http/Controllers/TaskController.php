<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jatuh_tempo = $request->get('date');

        $newTask = new \App\Task;
        $newTask->uraian_kegiatan = $request->get('uraian_kegiatan');
        $newTask->sumber = $request->get('sumber');
        $newTask->PIC = $request->get('pic');
        $newTask->jatuh_tempo= Carbon::createFromFormat('Y-m-d',$jatuh_tempo)->format('Y-m-d H:i:s');     
        $newTask->status = 'BELUM';
        $newTask->approval = 'BELUM SETUJU';
        
        $file = $request->file('file');

        if ($file) {
            $file_path = $file->store('task-file', 'public');
            $newTask->url_berkas = $file_path;
        }

        $newTask->save();

        return redirect()->route('home')->with('status', 'Berkas successfully saved and published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
