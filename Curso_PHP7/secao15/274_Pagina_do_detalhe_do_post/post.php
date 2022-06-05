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
    <h1><?= $currentPost['title'] ?></h1>
<?php
    require_once "templates/footer.php"
?>