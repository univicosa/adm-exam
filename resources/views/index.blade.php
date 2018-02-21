@extends('default')

@section('title', 'Página Inicial - ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <br>

                <div class="jumbotron">
                    <h1 class="display-4">Olá, Mundo!</h1>

                    <p class="lead">Este é um teste básico para avaliar seu domínio das tecnologias base que utilizamos no nosso ambiente de desenvolvimento.</p>

                    <hr class="my-4">

                    <h4>A avaliação consiste nos seguintes passos:</h4>

                    <ol class="mb-4">
                        <li>Exibir os dados de um array em uma tabela simples.</li>
                        <li>Debugar e corrigir os erros de uma página de forma que os dados sejam exibidos corretamente.</li>
                        <li>Criar um formulário de contato com os campos de nome, email, telefone e mensagem. Esse formulário precisa ser enviado para o servidor e persistido na Database.</li>
                        <li>Criar um repositório no Github, commitar o projeto finalizado e enviar o link para o email <a href="mailto:webmaster@univicosa.com.br">webmaster@univicosa.com.br</a>.</li>
                    </ol>

                    <h4>Alguns detalhes desse projeto:</h4>

                    <ul class="mb-4">
                        <li>A estrutura do projeto consiste em um pacote básico construído utilizando <strong>Laravel Framework 5.5</strong> e <strong>Bootstrap 4</strong>.</li>
                        <li>Os dados estão armazenados no MongoDB em uma <strong>database de nome "Exam"</strong>.</li>
                        <li>Os controllers estão sob o namespace <strong>App\Http\Controllers</strong>.</li>
                        <li>Os templates estão no diretório <strong>resources/views</strong>.</li>
                    </ul>

                    <h4>Documentação de suporte:</h4>

                    <ul class="mb-4">
                        <li>Bootstrap: <a href="http://getbootstrap.com/docs/4.0/getting-started/introduction/">http://getbootstrap.com/docs/4.0/getting-started/introduction/</a></li>
                        <li>Laravel Framework: <a href="https://laravel.com/docs/5.5">https://laravel.com/docs/5.5</a></li>
                        <li>Database Laravel Drive: <a href="https://github.com/jenssegers/laravel-mongodb">https://github.com/jenssegers/laravel-mongodb</a></li>
                        <li>Database: <a href="https://docs.mongodb.com/">https://docs.mongodb.com/</a></li>
                    </ul>

                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ route('dynamic') }}" role="button"><i class="fas fa-rocket"></i> Vamos Começar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush