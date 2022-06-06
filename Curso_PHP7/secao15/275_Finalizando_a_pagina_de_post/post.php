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
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam alias veritatis adipisci magnam dolor perspiciatis, repellendus cum. Qui omnis sapiente quae, possimus vero natus. Accusantium optio vero maxime earum eveniet.
            Est ab sunt, facilis fugiat fuga architecto! Aliquid similique nemo dicta illum ut natus tenetur perferendis dolores. Illum, laboriosam provident. Perferendis iste at asperiores illum. Vero animi quidem sequi exercitationem?
            Cum quaerat dicta, laboriosam similique dolorem id aut est eaque numquam nam amet vel voluptatum facere provident odio sequi aliquam, deleniti excepturi quis quibusdam laborum eos omnis. Mollitia, inventore sunt!
            Enim fuga quos eaque libero eum magnam exercitationem suscipit delectus, dolore magni ab sint quo optio harum facilis eveniet iusto temporibus maiores officia corrupti! Modi nihil atque explicabo delectus ex.
            Corporis aliquam ratione ab aperiam quo ipsa natus animi. Distinctio porro, aperiam fugiat laudantium esse aliquid illum, omnis sequi optio eos quisquam minima quasi iure, dolorum consequatur! Doloribus, harum necessitatibus!</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam alias veritatis adipisci magnam dolor perspiciatis, repellendus cum. Qui omnis sapiente quae, possimus vero natus. Accusantium optio vero maxime earum eveniet.
            Est ab sunt, facilis fugiat fuga architecto! Aliquid similique nemo dicta illum ut natus tenetur perferendis dolores. Illum, laboriosam provident. Perferendis iste at asperiores illum. Vero animi quidem sequi exercitationem?
            Cum quaerat dicta, laboriosam similique dolorem id aut est eaque numquam nam amet vel voluptatum facere provident odio sequi aliquam, deleniti excepturi quis quibusdam laborum eos omnis. Mollitia, inventore sunt!
            Enim fuga quos eaque libero eum magnam exercitationem suscipit delectus, dolore magni ab sint quo optio harum facilis eveniet iusto temporibus maiores officia corrupti! Modi nihil atque explicabo delectus ex.
            Corporis aliquam ratione ab aperiam quo ipsa natus animi. Distinctio porro, aperiam fugiat laudantium esse aliquid illum, omnis sequi optio eos quisquam minima quasi iure, dolorum consequatur! Doloribus, harum necessitatibus!</p>
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul class="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>    
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $categorie): ?>
                    <li><a href="#"><?= $categorie ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php
    require_once "templates/footer.php"
?>