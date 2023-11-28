<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_style/post.css">
    <title>blog web</title>
</head>

<body>

    <header>
        <nav class=nav_container>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="post.php">Post</a>
                </li>
                <li>
                    <form action="" method="get">
                        <input type="text" name="search" id="search" placeholder="search">
                        <button type="submit" name="search">search </button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <main>
            <form action="addBlog.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Post Your BLOG</legend>

                    <label for="author">Name:</label>
                    <input type="text" name="author" id="author" placeholder="Hayyu Rabira" autocomplete="on" autofocus required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="hayyuR@gmail.com" autocomplete="on" required>

                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" placeholder="My Software Journey" autocomplete="on" required>

                    <label for="image">Choose an image:</label>
                    <input type="file" name="image" id="image" accept="image/*">

                    <label for="message">Message:</label>
                    <textarea name="message" id="message" placeholder="Write your blog here" required></textarea>

                    <button type="submit" id="post" name="submit">POST</button>
                    <legend>Post Your BLOG</legend>

            </form>
        </main>
    </main>
</body>

</html>