@extends('default')

@section('title', 'Listagem Dinâmica - ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 align-self-center">
                <br>

                <div class="jumbotron">
                    <h1 class="display-4">Listagem dinâmica</h1>

                    <p class="lead">Esta página possui um array de dados injetado no seu Controller.</p>

                    <hr class="my-4">

                    <p>Recupere esses dados e exiba em uma <a href="http://getbootstrap.com/docs/4.0/content/tables/">tabela estilizada do Bootstrap</a> de sua preferência.</p>
                </div>

                <hr>
            </div>

            <div class="col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Exiba os dados aqui!</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary btn-block btn-lg" href="{{ route('index') }}"><i class="fas fa-arrow-left"></i> Voltar</a>
                    </div>

                    <div class="col">
                        <a class="btn btn-primary btn-block btn-lg" href="{{ route('error-page') }}"><i class="fas fa-star"></i> Ir para próxima atividade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection