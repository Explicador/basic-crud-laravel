<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de lote</title>
    <link rel="stylesheet" href="{{asset('/css/materialize.min.css')}}">
</head>
<body>
<div class="row">
    <div class="navbar-fixed  indigo darken-2">
        <span class="white-text valign-wrapper center-align">CRUD LARAVEL</span>
    </div>
    <div class="col m8 offset-m2">
        <form method="post" action="{{url('lotes')}}" enctype="multipart/form-data">
            @csrf
            <div class="input-field col s12">
                <input type="text" class="" name="designacao" placeholder="Designacao">
            </div>
            <div class="input-field col s6">
                <select name="tipo">
                    <option value="sandalia">Sandalia</option>
                    <option value="sapatilha">Sapatilha</option>
                    <option value="sapato">Sapato</option>
                    <option value="chinelo">Chinelo</option>
                </select>
                <label>Tipo de calcado</label>
            </div>
            <div class="input-field col s6">
                <input type="number" name="quantidade" placeholder="Quantidade">
            </div>
            <div class="input-field col s6">
                <input type="number" name="tamanho" placeholder="Tamanho">
            </div>
            <div class="input-field col s6">
                <input type="date" name="data_fabrico" placeholder="data">
            </div>
            <div style="padding-bottom: 0.3em">
                <label class="col s6">
                    <input name="genero" type="radio"/>
                    <span>Masculino</span>
                </label>
                <label class="col s6">
                    <input name="genero" type="radio"/>
                    <span>Feminino</span>
                </label>
            </div>
            <div class="input-field right-align">
                <input type="submit" class="btn-flat white-text indigo darken-2 right-align" value="salvar">
            </div>
        </form>

    </div>
    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/materialize.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</div>
</body>
</html>