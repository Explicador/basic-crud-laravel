<html>
<head>
    <title>Listagem</title>
    <link rel="stylesheet" href="{{asset('/css/materialize.min.css')}}">

</head>
<body>
<div class="row">
    <div class="col m8 offset-m2">

        <div class="card">
            @if(\Session::has('success'))
                <p>{{ \Session::get('success') }}</p>
            @endif
        </div>
        <table class="table-of-contents">
            <thead>
            <tr>
                <th>Codigo</th>
                <th>Designacao</th>
                <th>Tipo</th>
                <th>Quantidade</th>
                <th>Data fabrico</th>
                <th></th>
            </tr>
            </thead>
            @foreach($lotes as $lote)
                <tr>
                    <td>{{$lote['id']}}</td>
                    <td>{{$lote['designacao']}}</td>
                    <td>{{$lote['tipo']}}</td>
                    <td>{{$lote['quantidade']}}</td>
                    <td>{{$lote['data_fabrico']}}</td>
                    <td class="center-align">
                        <a href="{{action('LoteController@edit',$lote['id'])}}" class="left-align btn-flat green white-text">
                            Editar
                        </a>
                        <form class="inline" action="{{action('LoteController@destroy',$lote['id'])}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn-flat right-align red white-text">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/js/materialize.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('select').formSelect();
    });
</script>
</body>
</html>