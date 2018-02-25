<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class MyController extends Controller
{
    //returns a simple page using view
    public function returningASimplePage(){
        return view('newpage');
    }
}
?>