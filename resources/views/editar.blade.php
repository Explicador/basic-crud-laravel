<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de lote</title>
    <link rel="stylesheet" href="{{asset('/css/materialize.min.css')}}">
</head>
<body>
<div class="row">
    <div class="col m8 offset-m2">
        <form method="post" action="{{action('LoteController@update', $id)}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <input type="text" name="id" value="{{$lote['id']}}" disabled>
            <input type="text" name="designacao" value="{{$lote['designacao']}}" disabled>
            <input type="text" name="quantidade" placeholder="Unidades">
            <button type="submit" class="btn-flat green">Editar</button>
        </form>
    </div>
</div>
<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/js/materialize.min.js')}}"></script>
</body>
</html>