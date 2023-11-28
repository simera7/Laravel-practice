<?php
function getUsers()
{
    $file_name = 'blogs.json';

    if (file_exists($file_name)) {
        $blogs_data = file_get_contents($file_name);
        $blogs = json_decode($blogs_data);
    }
    return $blogs;
}

function getBlogByAuthor($author)
{
    $blogs = getUsers();
    foreach ($blogs as $blog) {
        if ($blog->author == $author) {
            return $blog;
        }
    }
    return null;
}
