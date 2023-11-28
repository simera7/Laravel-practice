<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_style/main.css">
    <title>Blog web </title>
</head>

<body>

    <header>
        <nav class="nav_container">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="post.php">Post</a>
                </li>
                <li>
                    <form action="view.php" method="get">
                        <input type="text" name="search" id="search" placeholder="search">
                        <button type="submit" name="submit">Submit </button>
                    </form>
                </li>
            </ul>
        </nav>

    </header>
    <main>