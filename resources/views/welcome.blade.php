<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar - Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="/adicionar">
            @csrf
            <div class="form-group mb-2">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="Telefone">
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @if (count($contato) > 0)
                    @foreach ($contato as $cont)
                        <tr>
                            <th>{{ $cont->id }}</th>
                            <th>{{ $cont->nome }}</th>
                            <th>{{ $cont->telefone }}</th>
                            <th>{{ $cont->email }}</th>
                            <th><a href="/editar/{{ $cont->id }}" class="btn btn-primary">Editar</a>
                                <a href="/excluir/{{ $cont->id }}" class="btn btn-danger">Excluir</a>
                            </th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>Sem registros!</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>

</html>