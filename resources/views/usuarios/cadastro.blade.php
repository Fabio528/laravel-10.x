<h1>Criar Usuário</h1>
<form method="POST" action="/usuarios/salvar">
@csrf
<label>Nome:</label>
<input type="text" name="nome" value="{{@$resultado->nome}}"><br>
<label>Email:</label>
<input type="email" name="email"><br>
<label>Senha:</label>

<input type="password" name="senha"><br>
<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>