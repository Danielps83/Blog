<?php
include_once("templates/header.php");
?>
<main>
    <div id="title-container">
        <h1>Programar</h1>
        <p>Meu site: Programar</p>
    </div>

    <div id="posts-container">
        <?php foreach($posts as $post):?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>">
            </div>
        <?php endforeach;?>

    </div>
</main>

<?php
include_once("templates/footer.php")
?>