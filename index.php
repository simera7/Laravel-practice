<?php
require __DIR__ . '/users.php';

$blogs = getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Blog web </title>
</head>

<body>

    <header>
        <nav class="nav_container">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="post.php">Post</a>
                </li>
                <li>
                    <form action="index.php?id=<?php echo $user["id"] ?>" method="get">
                        <input type="text" name="search" id="search" placeholder="search">
                        <button type="submit" name="submit">Submit </button>
                    </form>
                </li>
            </ul>
        </nav>

    </header>
    <main>

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
                            <?= $blog->author ?>
                        </h3>
                    </div>
                </article>
            <?php endforeach ?>

        </section>
    </main>
    <footer>

    </footer>
</body>

</html>