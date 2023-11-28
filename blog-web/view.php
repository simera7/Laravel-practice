<?php
require __DIR__ . '/users.php';
$author = $_GET['search'];
include 'partials/header.php';
if (!isset($_GET['search'])) {
    include 'partials/not_found.php';
    exit;
}
$blog = getBlogByAuthor($author);
if (!$blog) {
    include 'partials/not_found.php';
    exit;
}

?>
<section class="blog_container">
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

</section>
<?php include 'partials/footer.php'; ?>