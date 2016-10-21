@extends('layouts.padrao')
@section('scripts')
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
    <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
    </div>
    <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
    <p>Back to <a href="#">the default sticky footer</a> minus the navbar.</p>
    <button class="btn btn-success" id="teste">Testar</button>
</div>
@endsection
