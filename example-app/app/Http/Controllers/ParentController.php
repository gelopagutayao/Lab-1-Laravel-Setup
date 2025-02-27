<?php

namespace App\Http\Controllers;
use App\Models\ParentModel; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class ParentController extends Controller
{
    public function index()
    {
        return view('parents.index');  
    }

    public function create()
    {
        return view('parents.create');
    }

    public function update(Request $request, $id)
    {
        return view('parents.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('parents.delete');
    }
}
