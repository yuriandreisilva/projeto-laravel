<div class="container mb-5 nt-3">
</div>
<div class="container mb-3 nt-3">
    <div class="table-responsive">
        <table class="table align-middle">
        <thead>
            <tr>
            <th class="text-center" colspan="4">Usuário<th>
            </tr>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Cidade</th></tr>
        </thead>
        @foreach($users as $user)
        <tbody>
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->city}}</td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
</div>
