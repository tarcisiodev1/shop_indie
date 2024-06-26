<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $productsDataTable;

    public function __construct(Product $product, ProductsDataTable $productsDataTable)
    {
        $this->product = $product;
        $this->productsDataTable = $productsDataTable;
    }

    public function index()
    {
        return $this->productsDataTable->render('back.product.index');
    }

    public function create()
    {


        return view('back.product.create');
    }

    public function destroy(String $id)
    {


        $productId = $this->product->findOrFail($id);

        if (!$productId) {
            return response(['status' => 'error', 'message' => 'Produto não encontrado']);
        }
        $productId->delete();
        return response(['status' => 'success', 'message' => 'Excluído com sucesso!']);
    }
}
