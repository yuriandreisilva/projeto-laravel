@extends ('layouts.header')
@section('title')
Artigos
@endsection

    <body id="page-top">

    @include ('layouts.nav')
    @include('table.all.posts')

    <div class="container">
        <div class="form-group">
        <a class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" href="{{ route('newPost') }}">Novo</button>
        {{-- Confirmar com Gui, neste caso se pode ser usado âncora, tag: <a> --}}
        <a class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" href="{{ route('welcome') }}">Voltar</a>
        </div>
    </div>
    </body>
</html>
