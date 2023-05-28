@extends('layouts.topbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="flex-column">
                <div class="card">
                    <div class="card-header">{{ __('Minha Conta') }}</div>

                    <div class="card-body" >
                        <form method="POST" action="{{ route('upd_user') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{Auth::user()->name}}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{Auth::user()->email}}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>

                                <div class="col-md-6">
                                    <input id="password" placeholder="Nova Senha" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>

                                <div class="col-md-6">
                                    <input id="confirmpass" placeholder="Confirmar Nova Senha" type="password" class="form-control @error('confirmpass') is-invalid @enderror" name="confirmpass">

                                    @error('confirmpass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 text-center">
                                    <i class="far fa-info-circle"></i> Apenas os dados inseridos serão alterados.
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Alterar Informações') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="flex-column">
                <div class="card">
                    <div class="card-header">{{ __('Meus Endereços') }}</div>
                    <div class="card-body table-responsive m-3">
                        <table class="table flex-column flex-row text-center">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">CEP</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($addr as $key => $data)

                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$data->address}}</td>
                                    <td>{{$data->zip_code}}</td>
                                    <td>{{$data->city}}</td>
                                    <td>{{$data->uf}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('del_address') }}">
                                            @csrf
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}">
                                            <button type="submit" class="btn btn-sm btn-outline-danger me-1"><i class="far fa-minus"></i></button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <div class="row mb-3">
                            <div class="col-md-12 text-center">
                                <i class="far fa-info-circle"></i> Só será permitido a adição de até 5 endereços.
                            </div>
                        </div>
                        @if(count($addr) < 5)
                            <div class="row mb-0">
                                <div class="col-md-12 text-center">
                                    <a href="{{route('adresses')}}" class="btn btn-primary">
                                        {{ __('Adicionar Endereço') }}
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
