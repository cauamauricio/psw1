
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
       <img src="img/1.jpg" alt="" class="img1"> 
        <h1>ATIVIDADE-PSW</h1>    
        <img src="img/2.jpg" alt="" class="img2"> 
    </header>

    <div class="links">
    <nav>
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">Youtube</a>
        <a href="https://www.w3schools.com/html/html_form_input_types.asp">W3schools</a>
        <a href="https://web01.guanambi.ifbaiano.edu.br/moodle/">moodle</a>
        <a href="https://br.pinterest.com">pinterest</a>
    </nav>
    </div>

    <div class="principal">
        <h1>Formulário PSW</h1>
        <form action="#" method="post" class="formulario">

            <div class=" nome">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class=" endereco">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço">
            </div>

            <div class="data-nascimento">
                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="date" id="data-nascimento" name="data-nascimento">
            </div>

            <div class=" cep">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" placeholder="Ex: 12345-678">
            </div>

            <div class="rua">
                <label for="rua">Rua:</label>
                <input type="text" id="rua" name="rua" placeholder="Digite sua rua">
            </div>

            <div class="sexo">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="genero fluido">genero fluido</option>
                    <option value="não binário">não binário</option>
                    <option value="civic-2007">civic-2007</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="Estado Civil">
                <label for="Estado Civil">Estado Civil:</label>
                <input type="radio" id="solteiro" name="Estado Civil" value="solteiro">
                <label for="solteiro">Solteiro(a)</label>
                <input type="radio" id="casado" name="Estado Civil" value="casado">
                <label for="casado">Casado(a)</label>
                <input type="radio" id="viuvo" name="Estado Civil" value="viuvo">
                <label for="Viuvo">Viuvo(a)</label>
            </div>

            <div class="idade">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="0" max="120">
            </div>

            <div class=" email">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email">
            </div>

            <div class=" senha">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            </div>

            <div class="telefone">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Ex: (11) 99999-9999">
            </div>

            <div class="site">
                <label for="site">Site Pessoal:</label>
                <input type="url" id="site" name="site" placeholder="http://seusite.com">
            </div>

            <div class=" foto">
                <label for="arquivo">Foto de Perfil:</label>
                <input type="file" id="arquivo" name="arquivo">
            </div>

            <div class=" cor-favorita">
                <label for="cor-favorita">Cor Favorita:</label>
                <input type="color" id="cor-favorita" name="cor-favorita">
            </div>

            <div class="html,css,etc">
                <p>Escolha sua linguagem favorita</p>
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label for="html">HTML</label><br>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label for="css">CSS</label><br>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                <label for="javascript">JavaScript</label>
            </div>

            <div class="busca">
                <label for="pesquisa">Busca:</label>
                <input type="search" id="pesquisa" name="pesquisa" placeholder="Pesquisar...">
            </div>

            <div class=" feedback">
                <label for="feedback">feedback:</label>
                <input type="range" id="feedback" name="feedback" min="0" max="120">
            </div>

            <div class=" semana">
                <label for="semana">Semana de Férias:</label>
                <input type="week" id="semana" name="semana">
            </div>

            <div class=" mes">
                <label for="mes">Mês Favorito:</label>
                <input type="month" id="mes" name="mes">
            </div>

            <div class=" hora">
                <label for="hora">Hora Preferida:</label>
                <input type="time" id="hora" name="hora">
            </div>

            <div class=" oculto">
                <label for="hidden">Campo Oculto:</label>
                <input type="hidden" id="hidden" name="hidden" value="valor oculto">
            </div>

            <div class=" termos">
                <label for="checkbox">Aceitar Termos:</label>
                <input type="checkbox" id="checkbox" name="checkbox" value="sim">
            </div>

            <div class="enviar">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <footer>
    <div class="copy">
        <p>© Copyright - Cauã - 2024</p>
        </div>
        <img src="img/3.jpg" alt="" class="img3">
   
</footer>

    
    
    </body>
    </html>