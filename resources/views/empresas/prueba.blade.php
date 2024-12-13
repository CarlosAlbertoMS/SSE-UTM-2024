<h1>ADMINS</h1>
<table>
    <thead>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>descripcion</td>
            <td>rfc</td>
            <td>sector</td>
            <td>giro</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($empresas as $empresa)
            <tr>
                <td> {{ $empresa['id'] }} </td>
                <td> {{ $empresa['nombre'] }} </td>
                <td> {{ $empresa['descripcion'] }} </td>
                <td> {{ $empresa['rfc'] }} </td>
                <td> {{ $empresa['sector'] }} </td>
                <td> {{ $empresa['giro'] }} </td>
            </tr>
        @endforeach 
    </tbody>
</table>
