@extends('layouts.topbar')

@section('content')
    <div class="container">
        <!-- Sessão para você -->
        <div class="row justify-content-center">
            <div class="flex-column">


                <div class="pagination">
                    <div class="col-xl-3">
                        <div class="card me-3">
                            <div class="card-header">
                                Filtrar Produtos
                            </div>
                            <div class="card-body">
                            <ul class="nav flex-column">
                                @foreach($cat_list as $key => $data)
                                    @if($data->super_cat_id == null)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-current="page" href="#">{{$data->cat_nome}}</a>
                                        <ul class="dropdown-menu">
                                            @foreach($cat_list as $key2 => $data2)
                                                @if($data2->super_cat_id == $data->cat_id && $data2->super_cat_id != null)
                                                    <li>
                                                        <a class="dropdown-item" aria-current="page" href="#">{{$data2->cat_nome}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                @endforeach

                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-header">{{ __('Produtos') }}</div>
                            <li class="page-item">
                                <div class="row">
                                    @foreach($prod_list as $key => $data)
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card m-3">
                                            <img class="card-image card-img rounded-0 loaded" src="{{$data->url_imagem}}" alt="{{$data->nome_produto}}" width="213" height="213" data-lazy="true" data-srcset="{{$data->url_imagem}}" srcset="{{$data->url_imagem}}" data-ll-status="loaded">
                                            <div class="card-body">
                                                <h2 class="h5">
                                                    <a href="#">
                                                        {{$data->nome_fabricante}} {{$data->nome_produto}}
                                                    </a>
                                                </h2>
                                                {{$data->cat_nome}}
                                            </div>
                                            <div class="card-footer">
                                                R$ {{$data->valor_produto}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
