<div class="container mb-5 nt-3">
</div>
<div class="container mb-3 nt-3">
    <div class="table-responsive">
        <table class="table align-middle">
        <thead>
            <tr>
            <th class="text-center" colspan="4">Endereço<th>
            </tr>
            <tr>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            <th>{{$address->street}}</th>
            <td>{{$address->number}}</td>
            <td>{{$address->city}}</td>
            <td>{{$address->state}}</td>
            </tr>
        </tbody>
        </table>
    </div>
</div>

