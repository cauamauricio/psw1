<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
       <img src="img/1.png" alt="Imagem 1" class="img1"> 
        <h1>CADASTRAMENTO DOS JOGADORES</h1>    
        <img src="img/2.png" alt="Imagem 2" class="img2"> 
    </header>

    <div class="links">
         <nav>
                 <a href="index.php">Início</a> 
                 <a href="cadaluno.php">Cadastro</a> 
                 <a href="listaaluno.php">Lista de Jogadores</a>
        </nav>
         </div>

    <div class="principal">
        <h1>Cadastro</h1>
        <form action="listaaluno.php" method="post"class="formulario"> 
            <div class="nome">
                <label for="nome">Nome:</label><br><br>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome"required><br><br>
            </div>

            <div class="endereco">
                <label for="endereco">Endereço:</label><br><br>
                <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço"required><br><br>
            </div>

            <div class="bairro">
                <label for="bairro">Bairro:</label><br><br>
                <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro"required><br><br>
            </div>

            <div class="cidade">
                <label for="cidade">Cidade:</label><br><br>
                <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade"required><br><br>
            </div>

            <div class="uf">
                <label for="uf">UF:</label><br><br>
                <select id="uf" name="uf" required>
                    <option value="">Selecione seu estado</option><br><br>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select> <br> <br>
            </div>

            <div class="cpf">
                <label for="cpf">CPF:</label><br><br>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required> <br><br>
            </div>

            <div class="celular">
                <label for="celular">Celular:</label><br><br>
                <input type="tel" id="celular" name="celular" placeholder="Ex: (11) 99999-9999"required ><br><br>
            </div>

            <div class="data-nascimento">
                <label for="data-nascimento">Data de Nascimento:</label><br><br>
                <input type="date" id="data-nascimento" name="data-nascimento" required><br><br>
            </div>

            <div class="disciplinas-cursadas">
                <label for="disciplinas-cursadas">Disciplinas Cursadas:</label><br><br>
                <input type="text" id="disciplinas-cursadas" name="disciplinas-cursadas" placeholder="Liste as disciplinas que você já cursou" required><br><br>
            </div>

            <div class="disciplinas-preferidas">
                <label for="disciplinas-preferidas">Disciplinas Preferidas:</label><br><br>
                <input type="text" id="disciplinas-preferidas" name="disciplinas-preferidas" placeholder="Liste suas disciplinas favoritas" ><br><br>
            </div>

            <div class="enviar">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

<div class="footer">

    <div id="drodape1"></div>

        <div id="drodape2">
        <p>© Copyright - Cauã - 2024</p> 
    </div>

 <div id="drodape3">
        <img id= "img3" src="img/3.jpg" alt="Imagem 3">
    </div>

</div>

</body>
</html>
