
<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/home-style.css"/>
</head>

<h1><?= htmlspecialchars($this->title) ?></h1>

<aside>
    <h2>Recent Posts:</h2>
    <?php foreach ($this->sidebarPosts as $post) : ?>
        <div id="sidebarPost">
        <a href="<?= APP_ROOT ?>/home/view/<?= $post['id'] ?>"><?= htmlentities($post['title']) ?></a>
        </div>
    <?php endforeach ?>

</aside>
<body background="<?= APP_ROOT ?>/content/images/background.jpg">
<main id="posts">
    <article id="post">
        <?php foreach ($this->posts as $post) : ?>
            <h2 class="title"><?= htmlentities($post['title']) ?></h2>

            <div>
                <p class="content"><?= $post['content'] ?></p>
            </div>
            <div class="date">
                <i>Posted on</i>
                <?= (new DateTime($post['date']))->format('d-M-Y') ?>
                <i>by</i>
                <?= htmlentities($post['full_name']) ?>
            </div>

            <div id="share-buttons">
                <br>
                <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
                    <img src="<?= APP_ROOT ?>/content/images/facebook.png" alt="Facebook" />
                </a>
                <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
                    <img src="<?= APP_ROOT ?>/content/images/google+.png" alt="Google" />
                </a>
                <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                    <img src="<?= APP_ROOT ?>/content/images/twitter.png" alt="Twitter" />
                </a>
            </div>

        <?php endforeach ?>
    </article>
</main>
</body>