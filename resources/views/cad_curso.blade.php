@extends('padrao')
@section('content')
    <section>
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title d-flex align-items-center flex-wrap">
                            <h2 class="mr-40">Cadastrar Categoria</h2>
                        </div>
                    </div>
                    <!-- Invoice Wrapper Start -->
                    <div class="invoice-wrapper align-items-center m-5">
                        <div class="row align-items-center">
                            <div class="col-10 ">
                                <div class="invoice-card card-style mb-30">
                                    <div class="card-style mb-30 ">
                                        <h6 class="mb-25 fs-4">Digite o nome do curso</h6>
                                        <form method="post" action="{{ route('cadastro-curso') }}">
                                          @csrf  
                                          <div class="input-style-1 fs-4 ">

                                                <label class="fs-4">Curso</label>

                                                <input type="text" placeholder="Nome do curso" name="nomecurso" />
                                                <input type="text" placeholder="Carga Horária" name="cargahoraria" />
                                                <input type="text" placeholder="ID Categoria" name="idcategoria" />
                                                <input type="text" placeholder="Valor" name="valor" />

                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                                            </div>
                                    </div>
                                    </form>

                                </div>
                                <!-- Invoice Wrapper End -->
                            </div>
                            <!-- end container -->
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end container -->
            </div>
            <!-- end container -->
        </div>
        <!-- end container -->
    </section>
@endsection
