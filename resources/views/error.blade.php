@extends('default')

@section('title', 'Vamos ao debug - ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <br>

                <div class="jumbotron">
                    <h1 class="display-4">Vamos ao debug!</h1>

                    <p class="lead">Ao clicar na próxima ação você verá a tela padrão de erro do sistema com uma série de dados</p>

                    <hr class="my-4">

                    <p>Nessa etapa você deve rastrear os bugs pelo código e fixá-los. Ao final do processo você verá uma página semelhante a essa com uma tabela de espaçonaves e a opção de seguir para o próximo passo.</p>

                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ route('error-page', 'just-do-it') }}" role="button">Vamos lá.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection