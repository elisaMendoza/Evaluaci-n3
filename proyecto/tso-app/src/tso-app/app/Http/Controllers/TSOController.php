<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TSOController extends Controller
{
    public function Alumnos(){
        return(DB::table('Alumnos')->get());
    }
    public function Cursos(){
        return(DB::table('Cursos')->get());
    }
    public function Carreras(){
        return(DB::table('Carreras')->get());
    }

}
