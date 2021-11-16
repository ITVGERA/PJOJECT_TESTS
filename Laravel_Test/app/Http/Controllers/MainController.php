<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Collection;
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
   // Ignores notices and reports all other kinds... and warnings
   error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
   // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
   }
class MainController extends Controller
{
   public function index()
   {
    
 $all=Film::all();
$films=Film::orderBy('year')->Paginate(5);
return view('home',compact('films','all'));
   }
  
   public function search(Request $req)
   {
$rez=$req->search_name;
$all=Film::where('name','LIKE',"%{$rez}%");
$films = Film::where('name','LIKE',"%{$rez}%")->Paginate(5);
return view('home',compact('films','all'));
   }
 
}
 