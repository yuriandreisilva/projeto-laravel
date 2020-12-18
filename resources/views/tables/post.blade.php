<div class="container mb-5 nt-3">
</div>
<div class="container mb-3 nt-3">
    <div class="table-responsive">
        <table class="table align-middle">
        <thead>
            <tr>
            <th class="text-center" colspan="3">Artigos<th>
            </tr>
            <tr>
            <th scope="col">Título</th>
            <th scope="col">Sub Título</th>
            <th scope="col">Conteúdo</th>

            </tr>
        </thead>
         @foreach ($post as $post)
        <tbody>
            <tr>
            <th>{{$post->title}}</th>
            <td>{{$post->subtitle}}</td>
            <td>{{$post->content}}</td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
</div>

