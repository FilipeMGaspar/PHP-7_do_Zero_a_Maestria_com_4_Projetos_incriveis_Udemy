
    <?php
        require_once "templates/header.php";
    ?>
    <main>
        <div id="title-container">
            <h1>Blog Codar</h1>
            <p>O seu blog de programação!</p>
        </div>
        <div id="post-container">

            <?php foreach ($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $_BASE_URL; ?>/img/<?= $post['img'] ?>" alt="">
                </div>
            <?php endforeach; ?>    
        </div>
    </main>
    <?php
        require_once "templates/footer.php";
    ?>