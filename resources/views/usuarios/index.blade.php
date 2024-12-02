<h1>Lista de Usuários</h1>
<table>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Remover</th>
<th>Editar</th>

</tr>
@foreach($usuarios as $usuario)
<tr>
<td>{{ $usuario->id }}</td>
<td>{{ $usuario->nome }}</td>
<td>{{ $usuario->email }}</td>
<td><a href='/usuarios/remover/{{$usuario->id}}'>Remover</a></td>
<td><a href='/usuarios/cadastro/{{$usuario->id}}'>Editar</a></td>
</tr>
@endforeach
</table>