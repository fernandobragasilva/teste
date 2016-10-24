@extends('layouts.padrao')
@section('scripts')
    <script type="text/javascript" src="/js/inicio.js"></script>
    <script type="text/javascript">
        Teste.Util.iniciarModulo("Main");
    </script>
@endsection
@section('content')
<div id="container" class="container conteudo">
    <div class="container">&nbsp;</div>
    <div class="container">&nbsp;</div>
    <div class="container">&nbsp;</div>
    <div class="container">&nbsp;</div>
    <div class="container">&nbsp;</div>
    <div class="page-header" >
        <h1>@{{ message }}</h1>
    </div>
    <button class="btn btn-success" id="teste">Testar</button>
</div>
@endsection
