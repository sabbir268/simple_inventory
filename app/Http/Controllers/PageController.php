<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\User;
use App\Supplying;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reciveProducts(Products $products , User $user , Supplying $supplying)
    {   
        $allProducts = $products->all();
        $supplyers = $user->where('role','=','supplier')->get();
        $recivedProducts = $supplying->orderByDesc('id', 'DESC')->paginate(20);
        return view('admin.products.recive', compact('allProducts','supplyers','recivedProducts'));
    }


    public function sentProducts(Products $products , User $user , Supplying $supplying)
    {   
        $sendProducts = Auth::user()->supplying()->paginate(20);
        return view('supplier.index', compact('sendProducts'));
    }

}
