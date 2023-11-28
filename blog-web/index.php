<?php
require __DIR__ . '/users.php';

$blogs = getUsers();
include 'partials/header.php';
?>
<section class="blog_container">
    <?php foreach ($blogs as $blog) : ?>

        <article class="blog_content">
            <h1 class="blog_title"><?= $blog->title ?>
            </h1>
            <figure class="blog_img_container">
                <img class="" alt="" src=<?= $blog->image ?> height="auto" width="100%">
            </figure>
            <div class="para_h">
                <p class="blog">
                    <?= $blog->message ?>
                </p>
                <h3 class=author>
                    Author: <?= $blog->author ?>
                </h3>
            </div>
        </article>
    <?php endforeach ?>

</section>
<?php include 'partials/footer.php'; ?>