@extends('back.main')


@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Products</li>
            </ol>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.product.index') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" name="nome" placeholder="Add nome da categoria" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Ativo</option>
                                <option value="0">Cancelado</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Salvar</button>

                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script></script>
@endsection
