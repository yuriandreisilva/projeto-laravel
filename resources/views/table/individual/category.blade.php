<div class="container mb-5 nt-3">
</div>
<div class="container mb-3 nt-3">
    <div class="table-responsive">
        <table class="table align-middle">
        <thead>
            <tr>
            <th class="text-center" colspan="3">Categorias<th>
            </tr>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>

            </tr>
        </thead>
        @foreach($categories as $category)
        <tbody>
            <tr>
            <th>{{$category->id}}</th>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
</div>

