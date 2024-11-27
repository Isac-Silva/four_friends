<?php
    require_once("templates/header.php");

    require_once("dao/MovieDAO.php");

    // DAO dos filmes
    $movieDao = new MovieDAO($conn, $BASE_URL);

    $latestMovies = $movieDao->getLatestMovies();

    $actionMovies = $movieDao->getMoviesByCategory("Ação");

    $dramaMovies = $movieDao->getMoviesByCategory("Drama");

    $comedyMovies = $movieDao->getMoviesByCategory("Comédia");

    $fantasyMovies = $movieDao->getMoviesByCategory("Fantasia / Ficção");

    $romanceMovies = $movieDao->getMoviesByCategory("Romance");

?>
    <div id="main-container" class="container-fluid">
        <h2 class="section-title">Filmes novos</h2>
        <p class="section-description">Veja as críticas dos últimos filmes adicionados no FoUrFriends</p>
        <div class="movies-container">
            <?php foreach($latestMovies as $movie): ?>
            <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($latestMovies) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Ação</h2>
        <p class="section-description">Veja os melhores filmes de ação</p>
        <div class="movies-container">
            <?php foreach($actionMovies as $movie): ?>
            <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($actionMovies) === 0): ?>
                <p class="empty-list">Ainda não há filmes de ação cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Drama</h2>
        <p class="section-description">Veja os melhores filmes de drama</p>
        <div class="movies-container">
            <?php foreach($dramaMovies as $movie): ?>
            <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($dramaMovies) === 0): ?>
                <p class="empty-list">Ainda não há filmes de drama cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Comédia</h2>
        <p class="section-description">Veja os melhores filmes de comédia</p>
        <div class="movies-container">
            <?php foreach($comedyMovies as $movie): ?>
            <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($comedyMovies) === 0): ?>
                <p class="empty-list">Ainda não há filmes de comédia cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Fantasia / Ficção Científica</h2>
        <p class="section-description">Veja os melhores filmes de Fantasia / Ficção</p>
        <div class="movies-container">
            <?php foreach($fantasyMovies as $movie): ?>
            <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($fantasyMovies) === 0): ?>
                <p class="empty-list">Ainda não há filmes de fantasia ou ficção científica cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Romance</h2>
        <p class="section-description">Veja os melhores filmes de Romance</p>
        <div class="movies-container">
            <?php foreach($romanceMovies as $movie): ?>
            <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($romanceMovies) === 0): ?>
                <p class="empty-list">Ainda não há filmes de romance cadastrados!</p>
            <?php endif; ?>
        </div>
    </div>
    <?php if($userData): ?>

    <?php else: ?>
        <div class="about" id="about">
            <section class="about-section">
                <div class="content">
                    <div class="text">
                        <h2>Sobre Nós</h2> 
                        <h1>Four Friends</h1>
                        <p>Four Friends é uma plataforma para amantes do cinema que permite catalogar filmes, séries e documentários, além de criar listas personalizadas. Os usuários podem avaliar e recomendar conteúdos, interagindo com amigos e a comunidade profissional da indústria.</p>
                    </div>
                    <div class="logo">
                        <img src="./img/logo.png" alt="Four Friends Logo">
                    </div>
                </div>
            </section>
            <section class="team">
                <h3>A Equipe</h3>
                <h2>Quem Faz Parte da Four Friends</h2>
                <div class="team-member">
                    <img src="./img/team/isac.PNG" alt="Isac Silva">
                    <p class="team-member-name">Isac Silva</p>
                    <p>CEO</p>
                    <p><a href="mailto:silvaisac@fourfriends.com">silvaisac@fourfriends.com</a></p>
                </div>
                <div class="team-member">
                    <img src="./img/team/julia.PNG" alt="Júlia Soares">
                    <p class="team-member-name">Júlia Soares</p>
                    <p>Produtora Executiva</p>
                    <p><a href="mailto:soaresjulia@fourfriends.com">soaresjulia@fourfriends.com</a></p>
                </div>
                <div class="team-member">
                    <img src="./img/team/larissa.PNG" alt="Larissa Farinha">
                    <p class="team-member-name">Larissa Farinha</p>
                    <p>Gerente de Produção</p>
                    <p><a href="mailto:farinhalarissa@fourfriends.com">farinhalarissa@fourfriends.com</a></p>
                </div>
                <div class="team-member">
                    <img src="./img/team/laura.PNG" alt="Laura Sant'Ana">
                    <p class="team-member-name">Laura Sant'ana</p>
                    <p>Desenvolvimento Criativo</p>
                    <p><a href="mailto:santanalaura@fourfriends.com">santanalaura@fourfriends.com</a></p>
                </div>
            </section>
        </div>
    <?php endif; ?>
    
    <div class="contact" id="contact">
            <section>
                <div class="form-contact">
                    <h3>Fale conosco se necessário!</h3>
                    <h2>Envie a sua mensagem</h2>
                    <form action="" method="get">
                        <input type="text" name="name" placeholder="Seu nome aqui">
                        <input type="email" name="email" placeholder="Seu E-mail aqui">
                        <input type="text" name="subject" placeholder="Assunto">

                        <textarea name="message" placeholder="Digite sua mensagem"></textarea>

                        <button type="submit">Enviar Mensagem</button>
                    </form>
                </div>
            </section>
        </div>
<?php
    require_once("templates/footer.php");
?>