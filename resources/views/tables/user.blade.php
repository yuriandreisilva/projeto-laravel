<div class="container mb-5 nt-3">
</div>
<div class="container mb-3 nt-3">
    <div class="table-responsive">
        <table class="table align-middle">
        <thead>
            <tr>
            <th class="text-center" colspan="3">Usuário<th>
            </tr>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Rua</th>
            <th scope="col">Email</th></tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
