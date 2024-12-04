<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>lista</title>
</head>
<body>

    <header>
        <img src="img/1.jpg" alt="" class="img1"> 
         <h1>ATIVIDADE-PSW</h1>    
         <img src="img/2.jpg" alt="" class="img2"> 
     </header>
 
     <div class="links">
         <nav>
                 <a href="index.php">Home</a> |
                 <a href="cadaluno.php">Cadastro</a> |
                 <a href="listaaluno.php">Lista de Alunos</a>
        </nav>
         </div>

         <h1>Lista de Alunos</h1>
         <table>
             <thead>
                 <tr>
                     <th>Nome do Aluno</th>
                     <th>Celular</th>
                     <th>Data de Nascimento</th>
                     <th>CPF</th>
                 </tr>
             </thead>
             <tbody>
                 <td>
                <?php
                echo $_POST ['nome'] ;
                echo $_POST ['Celular'] ;
                echo $_POST ['BData de nascimento'];
                echo $_POST ['CPF'] ;
            
                ?>
                 </td>
             </tbody>
         </table>
        </header>
    <footer>
        <div class="copy">
            <p>© Copyright - Cauã - 2024</p>
            </div>
            <img src="img/3.jpg" alt="" class="img3">
       
    </footer>

</body>