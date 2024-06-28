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

                    {{ $productId }}

                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script></script>
@endsection
