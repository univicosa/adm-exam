@extends('default')

@section('title', 'Envio de Formulário - ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <br>

                <div class="jumbotron">
                    <h1 class="display-4">Formulário de contato</h1>

                    <p class="lead">Nessa etapa você precisa criar um formulário de contato <a href="http://getbootstrap.com/docs/4.0/components/forms/">estilizado pelo Bootstrap</a>. Utilize os seguintes campos:</p>

                    <ul>
                        <li>Nome</li>
                        <li>Email</li>
                        <li>Telefone</li>
                        <li>Mensagem</li>
                    </ul>

                    <hr class="my-4">

                    <p>
                        Não é necessário realizar nenhuma validação complexa nesse formulário. Basta garantir que todos os campos foram preenchidos, persistir as informações na Collection users do MongoDB e exibir uma mensagem de recebimento após o envio.
                    </p>
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <div class="card-body">
                    <h4>Insira o seu formulário aqui.</h4>
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary btn-block btn-lg" href="{{ route('error-page', 'just-do-it') }}"><i class="fas fa-arrow-left"></i> Voltar</a>
                    </div>

                    <div class="col">
                        <a class="btn btn-primary btn-block btn-lg" href="{{ route('final') }}"><i class="fas fa-star"></i> Finalizar avaliação</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection