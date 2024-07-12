@extends('back.main')


@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Products</li>
            </ol>


            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detalhes do Produto
                </div>
                <div class="card-body">

                    <div class="row mt-3">
                        <div class="col-md-12">

                            <a href="{{ route('admin.product.edit', $productId->id) }}" class="btn btn-primary mb-2">Editar
                                Produto</a>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{ $productId->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nome</th>
                                            <td>{{ $productId->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Valor</th>
                                            <td>{{ $productId->value }}</td>
                                        </tr>
                                        <tr>
                                            <th>Largura</th>
                                            <td>{{ $productId->width }}</td>
                                        </tr>
                                        <tr>
                                            <th>Altura</th>
                                            <td>{{ $productId->height }}</td>
                                        </tr>
                                        <tr>
                                            <th>Comprimento</th>
                                            <td>{{ $productId->length }}</td>
                                        </tr>
                                        <tr>
                                            <th>Peso</th>
                                            <td>{{ $productId->weight }}</td>
                                        </tr>
                                        <!-- Outros campos do produto aqui -->

                                        <!-- Exibindo imagens do produto -->

                                        <tr>
                                            <th>Imagens</th>
                                            <td>

                                                <img src="{{ asset('storage/assets/images/product_images/' . $productId->image) }}"
                                                    alt="Imagem do Produto">

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script></script>
@endsection
