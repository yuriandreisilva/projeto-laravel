@extends ('layouts.header')
@section('title')
Registar Artigo
@endsection
    </head>
    <body id="page-top">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <form id="contactForm" action="{{ route('debug') }}" method="POST">
                @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="title">Títilo</label>
                            <input name="title" class="form-control" id="title" type="text" placeholder="Título" required="required" data-validation-required-title="Por favor insira o título." value="{{ old('title') }}"/>

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="subtitle">Subtítulo</label>
                            <input name="subtitle" class="form-control" id="subtitle" type="subtitle" placeholder="Subtítulo" required="required" data-validation-required-subtitle="Por favor insira o subtítulo." value="{{ old('subtitle') }}"/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="content">Conteúdo do artigo</label>
                            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Conteúdo do artigo" required="required" data-validation-required-content="Por favor insira o conteúdo." value="{{ old('content') }}"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group">
                    <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Enviar</button>
                    {{-- Confirmar com Gui, neste caso se pode ser usado âncora, tag: <a> --}}
                    <a class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" href="{{ route('welcome') }}">Voltar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
    </body>
</html>
