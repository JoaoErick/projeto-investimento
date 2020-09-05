<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon-investindo.ico') }}" type="image/x-icon">
</head>
<body>
    <div class="background">
        
    </div>

    <section id="conteudo-view" class="login">

        <h1>Investindo</h1>
        <h3>O nosso gerenciador de investimentos</h3>

        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

            <p>Acesse o sistema</p>

            <label>
                {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!}
            </label>

            <label>
                {!! Form::password('password', ['placeholder' => 'Senha']) !!}
            </label>

            {!! Form::submit('Entrar') !!}

        {!! Form::close() !!}

    </section> 
    
    
</body>
</html>