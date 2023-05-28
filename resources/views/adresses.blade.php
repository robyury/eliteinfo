@extends('layouts.topbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="flex-column">
                <div class="card">
                    <div class="card-header">{{ __('Adicionar Endereço') }}</div>

                    <div class="card-body" >
                        <form method="POST" action="{{ route('add_address') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Endereço com número" required>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Cidade" required>

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <input id="zipcode" minlength="8" maxlength="8" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" placeholder="CEP" required>

                                    @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <select id="state" name="state" class="form-select @error('state') is-invalid @enderror" aria-label="estado" required>
                                        <option value="" required selected disabled>Escolha um Estado</option>
                                        @foreach($states as $key => $data)
                                            <option value="{{$data->id_estado}}">{{$data->nome_estado}}</option>
                                        @endforeach
                                    </select>

                                    @error('state')
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
                                        {{ __('Adicionar Endereço') }}
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

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Adicionar Endereço') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
