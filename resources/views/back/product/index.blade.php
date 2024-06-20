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
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    {{-- <script>
        window.addEventListener('DOMContentLoaded', () => {



            // datatable
            $('#example').DataTable();
        })
    </script> --}}
@endsection
