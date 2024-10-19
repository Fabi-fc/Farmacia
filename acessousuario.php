<h3>Cadastrar Dados</h3>
<p>
        <form action="" method="get">
        
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
            <br>
            <br>
            <label for="Data">Data de Nacimento:</label>
            <input type="date" name="data" id="data">
            <br>
            <br>
            <label for="Masculino">Mascluino</label>
            <input type="radio" name="masculino" id="genero" checked>
            <label for="feminino">Feminino</label>
            <input type="radio" name="feminino" id="genero">
            <label for="outros">Outros</label>
            <input type="radio" name="outros" id="genero">
            <br>
            <br>
            <label for="checkbox">1°</label>
            <input type="checkbox" name="checkbox" id="checkbox">
            <label for="checkbox">2°</label>
            <input type="checkbox" name="checkbox" id="checkbox">
            <label for="checkbox">3°</label>
            <input type="checkbox" name="checkbox" id="checkbox">
            <label for="checkbox">4°</label>
            <input type="checkbox" name="checkbox" id="checkbox">
            <br>
            <br>
            <input type="button" value="Enviar">
        </form>
    </body>
   </body>
</html>    
<div id="formulario">
    <form action="form">
        <h2>Interessados em solicitar orçamentos,comprar medicamentos pode mandar uma mensagem abaixo:</h2>
        <label for="nome">Nome do medicamento:</label>
        <input type="text" name="nome" id="nome" placeholder="nome">
        <br><br>

        <label for="categoria">Medicamentos:</label>
        <select name="categoria" id="categoria">
            <option value="paracetamol">Paracetamol</option>
            <option value="analgésico">Analgésico</option>
            <option value="quantidade">Quantidade</option>
            <option value="preco">Preço</option>
            <option value="data">Data de Validade</option>
            <option value="remedio">Rémedio infantil</option>
            <option value=""nome">Nome</option>
            <option value="medicamento">Rémedio Controlado</option>
            <option value="profissionais">Profissionais</option>
            
        </select>
        <br><br>

        <label for="sugestao">Solicitação:</label>
        <textarea name="indicacao" id="indicacao" cols="40" rows="4">Compras online</textarea>
        <br>

        <br>
        <input class="submit" type="submit" value="Enviar">
    </form>
</div>

<footer>
    <hr>
    <span>Farmacia </span>
</footer>
</body>
</html>