<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('viet', function () {
    return view('viet');
});

//Route::get('/', [WelcomeController::class, 'Welcome']);

Route::get('dong', [WelcomeController::class, 'Dong']);

Route::get('note/index', [NoteController::class, "index"])->name("note.index");
Route::get('/', [NoteController::class, "index"]); // the default page
Route::get('note/create', [NoteController::class, 'create'])->name("note.create");
Route::post('note/store', [NoteController::class, 'store'])->name("note.store");
Route::get('note/edit/{id}', [NoteController::class, 'eidt'])->name("note.edit");
Route::put('note/update', [NoteController::class, 'update'])->name("note.update");
Route::get('note/show/{id}', [NoteController::class, 'show'])->name("note.show");
Route::get('note/show', [NoteController::class, 'show'])->name("note.show");
Route::delete('note/destroy/{id}', [NoteController::class, 'destroy'])->name("note.destroy");

Route::resource('note', NoteController::class);
