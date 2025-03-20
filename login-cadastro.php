<form action="envio-email.php" method="POST">

<label for="nome">Nome</label>
<input type="text" name="nome">

<label for="email">Email</label>
<input type="text" name="email">

<label for="senha">Senha</label>
<input type="text" name="senha">

<label for="cpf">CPF</label>
<input type="text" name="cpf">

<label for="celular">Celular</label>
<input type="text" name="celular">

<label id="sexo" for="">Sexo</label>
<select id="sexo" name="sexo">
    <option value="masculino">Masculino</option>
    <option value="femenino">Femenino</option>
</select>

<label for="datanascimento">Data de Nascimento</label>
<input type="date" name="datanascimento">

<label for="cep">Cep</label>
<input type="number" name="cep">

<label for="endereco">Endereço</label>
<input type="text" name="endereco">

<label for="complemento">Complemento</label>
<input type="text" name="complemento">

<label for="bairro">Bairro</label>
<input type="text" name="bairro">

<label for="cidade">Cidade</label>
<input type="text" name="cidade">

<label for="estado">Estado</label>
<input type="text" name="estado">

<label for="pjouclt">Pj ou Clt</label>
<select name="pjouclt">
<option value="Pj">Pj</option>
<option value="Clt">Clt</option>
</select>

<button type="submit">Cadastrar</button>
</form>
