@extends('default')

@section('title', 'Year!! Terminamos - ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <br>

                <div class="jumbotron">
                    <h1 class="display-4"><i class="fas fa-code"></i> Year!! Terminamos!</h1>

                    <p class="lead">O teste chegou ao fim. Parabéns por chegar até aqui com traquilidade.</p>

                    <hr class="my-4">

                    <p class="lead">
                        Agora crie um repositório no seu Github, envie esse projeto para lá e envie o link do Repositório para <a href="mailto:webmaster@univicosa.com.br">webmaster@univicosa.com.br.</a>
                    </p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary btn-block btn-lg" href="{{ route('form') }}"><i class="fas fa-arrow-left"></i> Voltar</a>
                    </div>

                    <div class="col">
                        <a class="btn btn-primary btn-block btn-lg" href="{{ route('index') }}"><i class="fas fa-home"></i> Ir para O início do Exame</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush