@extends('layouts.topbar')

@section('content')
    <div class="container">
        <!-- Sessão para você -->
        <div class="row justify-content-center">
            <div class="flex-column">
                <div class="pagination">
                    <div class="col-md-1 col-xl-3">
                        <div class="card me-3">
                            <div class="card-header">{{ __('Classificação') }}</div>
                            <div class="card-body">
                                <ul class="list-group-horizontal">
                                    <li class="list-group-item">
                                        <a href="#">Processadores</a>
                                        <ul class="list-group-horizontal">
                                            <li class="list-group-item">
                                                <a href="#">AMD</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Intel</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto">
                        <div class="card">
                            <div class="card-header">{{ __('Produtos') }}</div>
                            <li class="page-item">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card m-3">
                                            <img class="card-image card-img rounded-0 loaded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-ll-status="loaded">
                                            <div class="card-body">
                                                <h2 class="h5">
                                                    <a href="#">
                                                        Produto
                                                    </a>
                                                </h2>
                                                Descrição breve do produto
                                            </div>
                                            <div class="card-footer">
                                                R$ 9,99
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card m-3">
                                            <img class="card-image card-img rounded-0 loaded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-ll-status="loaded">
                                            <div class="card-body">
                                                <h2 class="h5">
                                                    <a href="#">
                                                        Produto
                                                    </a>
                                                </h2>
                                                Descrição breve do produto
                                            </div>
                                            <div class="card-footer">
                                                R$ 9,99
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card m-3">
                                            <img class="card-image card-img rounded-0 loaded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-ll-status="loaded">
                                            <div class="card-body">
                                                <h2 class="h5">
                                                    <a href="#">
                                                        Produto
                                                    </a>
                                                </h2>
                                                Descrição breve do produto
                                            </div>
                                            <div class="card-footer">
                                                R$ 9,99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <div class="m-3">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="far fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
