<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()->orderByDesc('created_at')->get();
        // dd($notes);
        return view("note.index", ['notes' =>  $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "<h1>Store(insert) method, this will be receive an object for inserting new Note</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view("note.edit", ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        return "<h1>Create method, this will be updating an incoming note object</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        return "<h1>Create method, this will be deleting an object</h1>";
    }
}
