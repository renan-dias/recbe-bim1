<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cafeteria da Esquina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <!-- Cabeçalho -->
    <header class="bg-dark text-white text-center p-5">
        <h1>Cafeteria da Esquina</h1>
        <p>O melhor café da cidade, agora pertinho de você!</p>
    </header>

    <!-- Seção sobre -->
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="imagens/cafe.jpg" class="img-fluid rounded" alt="Café sendo servido">
            </div>
            <div class="col-md-6">
                <h2>Sobre nós</h2>
                <p>Somos uma cafeteria artesanal com grãos selecionados e atendimento acolhedor. Venha nos visitar e experimente nossas delícias!</p>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section class="bg-light p-5">
        <div class="container">
            <h2 class="text-center mb-4">Fale com a gente</h2>
            <form action="processa.php" method="POST" class="row g-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Seu nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Seu e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-12">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
        <p>&copy; 2025 Cafeteria da Esquina - Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
