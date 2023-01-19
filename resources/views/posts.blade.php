<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Blog posts</title>
</head>
<body>
    <?php foreach ($posts as $post) :?>
    <article>
        <h1><a href="post/<?= $post->slug;?>"><?= $post->title;?></a></h1>
        <div>
            <?= $post->excerpt;?>
        </div>
    </article>
<?php endforeach;?>
<article>
        <h1><?= $post->title;?></h1>
        <p>
            <?= $post->body;?>    
        </p>
    </article>
    <a href="/">Go back</a>
</body>
</html>