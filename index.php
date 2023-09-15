<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositorio - Faculdade de Engenharias e Tecnlogias</title>
    <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="bg-dark.bg-gradient text-white p-4 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="./img/up_logo.png" alt="logo da up-maputo" class="w-10 h-10 me-2">
            <span class="border border-white mx-10"></span>
            <img src="./img/logo-fet.jpeg" alt="logotipo da fet" class="w-20 h-20 ms-2">
            <h1 class="h5 ms-2">Repositorio da Faculdade de Engenharias e Tecnologias</h1>
        </div>
        <div class="d-flex align-items-center">
            <input type="text" name="search" id="search" placeholder="Pesquisar" class="form-control me-2">
            <a href="login.php" class="text-white me-2">Login</a>
            <a href="signup.php" class="text-white">Cadastrar</a>
        </div>
    </div>



    <div class="lastUploaded" class="bg-light.gb-gradient text-dark p-4 d-flex justiify-content-between align-items-start">
        <div>
            <table>
                <thead>
                    <th>Title</th>
                    <th>Uploaded at</th>
                    <th>Authors</th>
                </thead>
                <tbody></tbody>
            </table>
        </div>

    </div>


    <div class="container mt-5">
        <h1>Bem-vindo ao Repositório Científico</h1>
        <p>Encontre e explore uma vasta coleção de artigos científicos.</p>

        <!-- Campo de pesquisa -->
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Pesquisar artigos científicos">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">Pesquisar</button>
            </div>
        </div>

        <!-- Cards de informações -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="imagem1.jpg" class="card-img-top" alt="Imagem do Artigo">
                    <div class="card-body">
                        <h5 class="card-title">Título do Artigo 1</h5>
                        <p class="card-text">Autor: Autor 1</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="imagem2.jpg" class="card-img-top" alt="Imagem do Artigo">
                    <div class="card-body">
                        <h5 class="card-title">Título do Artigo 2</h5>
                        <p class="card-text">Autor: Autor 2</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="imagem2.jpg" class="card-img-top" alt="Imagem do Artigo">
                    <div class="card-body">
                        <h5 class="card-title">Título do Artigo 3</h5>
                        <p class="card-text">Autor: Autor 3</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="imagem2.jpg" class="card-img-top" alt="Imagem do Artigo">
                    <div class="card-body">
                        <h5 class="card-title">Título do Artigo 4</h5>
                        <p class="card-text">Autor: Autor 4</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="imagem2.jpg" class="card-img-top" alt="Imagem do Artigo">
                    <div class="card-body">
                        <h5 class="card-title">Título do Artigo 5</h5>
                        <p class="card-text">Autor: Autor 5</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="imagem2.jpg" class="card-img-top" alt="Imagem do Artigo">
                    <div class="card-body">
                        <h5 class="card-title">Título do Artigo 6</h5>
                        <p class="card-text">Autor: Autor 6</p>
                    </div>
                </div>
            </div>

            <!-- Adicione mais cards conforme necessário -->
        </div>
        <hr>

        

        <!--
         Preview de documentos carregados recentemente em forma de tabela -->
        <h2>Documentos Carregados Recentemente</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Documento 1</td>
                    <td>Autor 1</td>
                </tr>
                <tr>
                    <td>Documento 2</td>
                    <td>Autor 2</td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </div>


     <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Links Úteis</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Termos de Uso</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Sobre Nós</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Contato</h4>
                    <address>
                        <p><strong>Email:</strong> info@repositoriocientifico.com</p>
                        <p><strong>Telefone:</strong> (123) 456-7890</p>
                    </address>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
