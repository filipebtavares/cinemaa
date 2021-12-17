<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contato</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route("adicionarPost")}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputNome">Nome</label>
                    @if(isset($sessao))
                        <input type="text" required name="nome" value="{{$sessao->nome}}" class="form-control" id="inputNome" placeholder="Digite o nome">
                    @else
                        <input type="text" required name="nome" class="form-control" id="inputNome" placeholder="Digite o nome">
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputFilme">Filme</label>
                    @if(isset($sessao))
                        <input type="text" required name="filme" value="{{$sessao->filme}}" class="form-control" id="inputFilme" placeholder="Digite o filme">
                    @else
                        <input type="text" required name="filme" class="form-control" id="inputFilme" placeholder="Digite o filme">
                    @endif
                </div>

                <div class="form-group">
                    <label for="inputCadeira">Código da cadeira</label>
                    @if(isset($sessao))
                        <input type="number" required name="cadeira" value="{{$sessao->cadeira}}" class="form-control" id="inputCadeira" placeholder="Digite o código da cadeira">
                    @else
                        <input type="number" required name="cadeira" class="form-control" id="inputCadeira" placeholder="Digite o código da cadeira">
                    @endif
                </div>

                @if(isset($sessao))
                    <input type="hidden" name="id" value="{{$sessao->id}}">
                @endif

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Filme</th>
                        <th scope="col">Cadeira</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sessoes as $sessao)
                        <tr>
                            <td>{{$sessao->nome}}</td>
                            <td>{{$sessao->filme}}</td>
                            <td>{{$sessao->cadeira}}</td>
                            <td><a class="btn btn-primary" href="{{route("deletar", ["id" => $sessao->id])}}">excluir</a>  <a class="btn btn-primary" href="{{route("atualizar", ["id" => $sessao->id])}}">atualizar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
