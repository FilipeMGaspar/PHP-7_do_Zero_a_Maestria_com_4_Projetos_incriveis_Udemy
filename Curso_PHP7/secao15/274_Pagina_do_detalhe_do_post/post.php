<?php
        require_once "templates/header.php";
        if(isset($_GET['id'])) {
            $postId = $_GET['id'];
            $currentPost;

            foreach($posts as $post){
                if($post['id'] == $postId){
                    $currentPost = $post;
                }
            }
        }
    ?>
    
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class='img-container'>
                <img src="<?= $_BASE_URL; ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
        </div>
    </main>
<?php
    require_once "templates/footer.php"
?>