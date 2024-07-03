@extends('back.main')


@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Products</li>
            </ol>


            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">

                    <form id="createProductForm" method="POST" action="{{ route('admin.product.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nome do Produto</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <div class="feedback" id="nameError"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="value" class="form-label">Valor</label>
                                <input type="number" class="form-control" id="value" name="value" step="0.01">
                                <div class="feedback" id="valueError"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="weight" class="form-label">Peso</label>
                                <input type="number" class="form-control" id="weight" name="weight" step="0.01">
                                <div class="feedback" id="weightError"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="width" class="form-label">Largura</label>
                                <input type="number" class="form-control" id="width" name="width" step="0.01">
                                <div class="feedback" id="widthError"></div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="height" class="form-label">Altura</label>
                                <input type="number" class="form-control" id="height" name="height" step="0.01">
                                <div class="feedback" id="heightError"></div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="length" class="form-label">Comprimento</label>
                                <input type="number" class="form-control" id="length" name="length" step="0.01">
                                <div class="feedback" id="lengthError"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="image" class="form-label">Imagem do Produto (até 5MB)</label>
                                <input type="file" class="form-control-file" id="image" name="image"
                                    accept="image/*">
                                <div class="feedback" id="imageError"></div>
                            </div>
                        </div>
                        <div class="feedback" id="generalError"></div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>


                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            console.log("Document is ready");

            $(function() {
                console.log("DOM is ready");

                console.log($('#createProductForm'));

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#createProductForm').on('submit', function(e) {
                    e.preventDefault();
                    console.log("Form submitted");

                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log("Success:", response);

                            $('.feedback').html('');
                            console.log("produto criado com sucesso")

                            // window.location.href =
                            //     '{{ route('admin.product.index') }}';
                        },
                        error: function(xhr) {
                            console.log("Error:", xhr);

                            $('.feedback').html('');
                            if (xhr.status === 422) {
                                // Exibir erros de validação abaixo de cada campo
                                var errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                    $('#' + key + 'Error').html(
                                        '<span class="text-danger">' +
                                        value[0] + '</span>');
                                });
                            } else {
                                // Exibir mensagem de erro geral em uma div
                                $('#generalError').html(
                                    '<span class="text-danger">Erro ao criar o produto</span>'
                                );
                            }
                        }
                    });
                });
            });
        });
    </script>
@endsection
