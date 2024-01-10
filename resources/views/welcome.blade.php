<!DOCTYPE html
<html>

<head>
    <title>Formulario</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <h1>Formulario</h1>
    <hr />
    <form action="/enviar" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
    <label for="Codigo_produto">Codigo Produto</label>
    <input type="text" id="Codigo_produto" name="Codigo_Produto" class="form-control" placeholder="Codigo produto"> </div>
    <div class="form-group">
    <label for="Nome_produto">Nome do Produto</label>
    <input type="text" id="Nome_produto" name="Nome_produto" class="form-control" placeholder="Nome produto"> </div>
    <div class="form-group">
    <label for="Categoria">Categoria</label>
    <input type="text" id="Categoria" name="Categoria" class="form-control" placeholder="Categoria"> </div>
    <div class="form-group">
    <label for="Preco">Preço Unitario</label>
    <input type="text" id="Preco" name="Preco" class="form-control" placeholder="Preço Unitario"> </div>
    <div class="form-group">
    <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Descrição"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
</form>

</div>
</body>
</html>
