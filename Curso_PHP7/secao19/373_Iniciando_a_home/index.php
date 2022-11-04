<?php
    require_once "templates/header.php";
?>

    <div id="main-container" class="container-fluid">
        <h2 class="section-title">Filmes novos</h2>
        <p class="section-description">Veja as criticas dos últimos filmes adicionados no MovieStar.</p>
        <div class="movies-container">
            <div class="card movie-card">
                <div class="card-img-top" style="background-image: url('<?= $BASE_URL ?>img/movies/');"></div>
            </div>
        </div>

        <h2 class="section-title">Ação</h2>
        <p class="section-description">Veja os melhores filmes de ação.</p>
        <div class="movies-container"></div>
        
        <h2 class="section-title">Comédia</h2>
        <p class="section-description">Veja os melhores filmes de comédia.</p>
        <div class="movies-container"></div>
    </div>

<?php
    require_once "templates/footer.php";
?>