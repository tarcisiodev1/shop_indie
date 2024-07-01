@extends('back.main')


@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Criar produto</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Nome do produto" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="value">Valor</label>
                                        <input type="number" class="form-control" id="value"
                                            placeholder="Valor do produto" step="0.01" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="weight">Peso</label>
                                        <input type="number" class="form-control" id="weight"
                                            placeholder="Peso do produto" step="0.01" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="width">Largura</label>
                                        <input type="number" class="form-control" id="width"
                                            placeholder="Largura do produto" step="0.01" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="height">Altura</label>
                                        <input type="number" class="form-control" id="height"
                                            placeholder="Altura do produto" step="0.01" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="length">Comprimento</label>
                                        <input type="number" class="form-control" id="length"
                                            placeholder="Comprimento do produto" step="0.01" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="image">Imagem</label>
                                        <input type="file" class="form-control-file" id="image" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Criar produto</button>
                            </form>



                        </div>
                        {{-- <div class="card-footer text-center py-3">
                            <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
@section('js')
    <script>
        window.addEventListener('DOMContentLoaded', () => {



            // datatable
            $('#example').DataTable();
        })
    </script>
@endsection
