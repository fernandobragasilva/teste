@extends('layouts.padrao')
@section('scripts')
<script src="/js/main.js" />
<script type="text/javascript">
    Teste.Util.iniciarModulo("Main");
</script>
@endsection
@section('content')
<div class="container conteudo">
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
