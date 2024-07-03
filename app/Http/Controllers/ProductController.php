<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Image\Image;

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

    public function show(String $id)
    {


        $productId = $this->product->findOrFail($id);

        return view("back.product.show", compact("productId"));
    }

    public function edit(String $id)
    {


        $productId = $this->product->findOrFail($id);

        return view("back.product.edit", compact("productId"));
    }

    public function store(Request $request)
    {

        $validator = validator()->make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'value' => ['required', 'numeric', 'min:0'],
            'width' => ['required', 'numeric', 'min:0'],
            'height' => ['required', 'numeric', 'min:0'],
            'length' => ['required', 'numeric', 'min:0'],
            'weight' => ['required', 'numeric', 'min:0'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile('image')) {


            $imagem = $request->file('image');

            if (!$imagem->isValid()) {
                return response()->json(['error' => 'Invalid file'], 400);
            }

            // Gera um nome aleatório para a imagem, composto por 30 caracteres alfanuméricos, seguido da extensão do arquivo original da imagem.
            $nomeImagem = Str::random(30) . '.' . $imagem->getClientOriginalExtension();

            // Armazena a imagem no diretório especificado ('public/assets/images/product_images') com o nome gerado aleatoriamente.
            $imagem->storeAs('public/assets/images/product_images', $nomeImagem);

            // Define o caminho completo para a imagem recém-salva.
            $imagePath = public_path('storage/assets/images/product_images/' . $nomeImagem);

            // Carrega a imagem e redimensiona para uma largura e altura de 100 pixels.
            $image = Image::load($imagePath)->width(100)->height(100)->save($imagePath);


            // $image->save($imagePath);
            // $existingProduct = Product::where('name', $request->input('name'))->first();

            // if ($existingProduct) {
            //     return response()->json(['message' => 'Product with this name already exists'], 422);
            // }

            $product = Product::create([
                'name' => $request->input('name'),
                'value' => $request->input('value'),
                'width' => $request->input('width'),
                'height' => $request->input('height'),
                'length' => $request->input('length'),
                'weight' => $request->input('weight'),
                'image' => $nomeImagem,
            ]);

            if (!$product) {
                return response()->json(['message' => 'Failed to create product'], 500);
            }

            // ProductImage::create([
            //     'product_id' => $produto->id,
            //     'nome_do_arquivo' => $nomeImagem,
            // ]);

            return response()->json(['message' => 'Produto criado com sucesso'], 200);
        }
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
