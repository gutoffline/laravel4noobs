<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$username}}</h1>

    @if (1==2)
        <h3>Teste</h3>
    @else
        <h3>Teste2</h3>
    @endif

    @if ($username == "GUTO")
        <h1>è loko</h1>

    @elseif ($username == "teste")
        <h2>teste de usuário</h2>
    @endif

    @unless ($username == "guto")
        <br>unless = false
    @endunless

    @isset($args[1])
        <p>args esta setado</p>
    @endisset

    @empty($args['a'])
        <h3>esta vazio</h3>
    @endempty

    <table border="1">
    @for ($i = 0 ; $i < 10 ; $i++)
        <tr>
            <td>{{$i}}</td>
        </tr>
    @endfor
    </table>

    @while ($whilezada)
        {{dump($whilezada)}}
        @if ($whilezada)
            {{$whilezada = false}}
        @endif

    @endwhile

    @foreach ($args as $arg)
        {{$arg}}
    @endforeach

    @auth
        
    @endauth

    @guest
        
    @endguest
</body>
</html>
