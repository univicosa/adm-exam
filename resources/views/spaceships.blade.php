@extends('default')

@section('title', 'Tudo certo até agora! - ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <br>

                <div class="jumbotron">
                    <h1 class="display-4">Tudo certo até agora!</h1>

                    <p class="lead">Parece que todos os bugs foram encontrados. Se você chegou até aqui provavelmente está tudo no lugar não é Mesmo??!</p>

                    <hr class="my-4">

                    <pre id="debug" class="card">
                        <?php
                            var_dump($spaceships);
                        ?>
                    </pre>

                    <p>Vamos para nossa próxima atividade.</p>
                </div>
            </div>
            
            <div class="col-md-12">
                <p class="text-center">
                    <img class="img-responsive" src="https://cnet3.cbsistatic.com/img/_swuvqFbrobRiaxDRZKQDGKUHeY=/fit-in/x/2018/02/08/54caf509-c641-4984-8780-c6592e3521bf/falcon-heavy2.gif">
                </p>
            </div>

            <div class="col-md-12 mb-4">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Espaçonave</th>
                        <th scope="col">Fabricante</th>
                        <th scope="col">Capacidade</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($spaceships as $spaceship)
                        <tr>
                            <td>{{ $spaceship['name'] }}</td>
                            <td>{{ $spaceship['color'] }}</td>
                            <td>{{ $spaceship['manufacturer'] }}</td>
                            <td>{{ $spaceship['capacity'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary btn-block btn-lg" href="{{ route('dynamic') }}"><i class="fas fa-arrow-left"></i> Voltar</a>
                    </div>

                    <div class="col">
                        <button class="btn btn-primary btn-block btn-lg" type="button" id="next" data-location="{{ route('form') }}"><i class="fas fa-rocket"></i> Ir para próxima atividade</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection