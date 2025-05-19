<?php
use App\Models\Program;

//Program controller
public function index()
{
    $query = Program::query();

    if (request('hari')) {
        $query->where('hari', request('hari'));
    }

    $programs = $query->orderBy('jam_mulai')->get();

    return view('program-acara', compact('programs'));
}
?>