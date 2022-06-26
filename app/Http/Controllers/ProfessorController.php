<?php

namespace App\Http\Controllers;

use App\Models\Professores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessorController extends Controller
{
    public function index()
    {
         $professores = Professores::all();
         return view('professores.index',['professores'=>$professores]);
    }

  
    
}
