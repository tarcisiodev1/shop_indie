<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductsDataTable $productsDataTable)
    {
        return $productsDataTable->render('back.product.index');
    }

    public function create()
    {


        return view('back.product.create');
    }
}
