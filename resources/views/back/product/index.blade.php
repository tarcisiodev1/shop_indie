@extends('back.main')


@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produtos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Produtos</li>
            </ol>

            <div class="card-header d-flex justify-content-between mb-4">
                <div></div>
                <div class="card-header-action ">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-secundary "> <i class="fas fa-plus"></i>
                        Novo</a>
                </div>

            </div>
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
    <script>
        $('body').on('click', '.delete-item', function(e) {
            e.preventDefault();

            var id = $(this).data("id");
            var url = "{{ route('admin.product.destroy', ':id') }}";
            var urlWithId = url.replace(':id', id);
            var result = confirm("Tem certeza de que deseja excluir este produto?");

            if (result) {
                $.ajax({
                    type: "DELETE",
                    url: urlWithId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            // $('#products-table').DataTable().row('#' + id).remove().draw();
                            $('#products-table').DataTable().draw();
                            toastr.success(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(data) {
                        console.log('Erro:', data);
                        toastr.error("Ocorreu um erro ao excluir o produto.");
                    }
                });
            } else {
                return false;
            }
        });
    </script>
@endsection
