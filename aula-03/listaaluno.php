<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>lista</title>
</head>
<body>

<header>
       <img src="img/1.png" alt="Imagem 1" class="img1"> 
        <h1>LISTA DE JOGADORES</h1>    
        <img src="img/2.png" alt="Imagem 2" class="img2"> 
    </header>
 
     <div class="links">
         <nav>
                 <a href="index.php">Home</a> 
                 <a href="cadaluno.php">Cadastro</a> 
                 <a href="listaaluno.php">Lista de Alunos</a>
        </nav>
         </div>

         <h1>Lista dos Jogadores</h1>
    <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Celular</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Endereço</th>
                <th>UF</th>
                <th>Disciplinas Cursadas</th>
            </tr>
            </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST['nome']; ?></td>
                <td><?php echo $_POST['celular']; ?></td>
                <td><?php echo $_POST['data-nascimento']; ?></td>
                <td><?php echo $_POST['cpf']; ?></td>
                <td><?php echo $_POST['cidade']; ?></td>
                <td><?php echo $_POST['bairro']; ?></td>
                <td><?php echo $_POST['endereco']; ?></td>
                <td><?php echo $_POST['uf']; ?></td>
                <td><?php echo $_POST['disciplinas-cursadas']; ?></td>
            </tr>
            <tr>
                       <td>mario rodrigues</td>
                       <td>77998505955</td>
                       <td>01/01/2009</td>
                       <td>387482374922</td>
                       <td>Guanambi</td>
                       <td>Mata Onça</td>
                       <td>rua maria</td>
                       <td>RJ</td>
                       <td>Matemática</td>
                    </tr>
                    <tr>
                       <td>Joana cardoso</td>
                       <td>77998505955</td>
                       <td>01/11/2000</td>
                       <td>283781297382</td>
                       <td>Guanambi</td>
                       <td>bairro santa cruz</td>
                       <td>rua benjamin</td>
                       <td> mg</td>
                       <td>portugues</td>
                    </tr>
        </tbody>
    </table>
        </header>
        <br><br><br><br><br><br><br>
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