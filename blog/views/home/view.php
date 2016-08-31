<?php $this->title = $this->post['title']; ?>


<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/post-view-style.css"/>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/comment-style.css"/>
</head>

<body background="<?= APP_ROOT ?>/content/images/background.jpg">

<main>
    <div class="view-block">
        <h1 class="title"><?= htmlentities($this->post['title']) ?></h1>
        <div class="date">
            <i>Posted on</i>
            <?= (new DateTime($this->post['date']))->format('d-M-Y') ?>
            <i>by</i>
            <?= htmlentities($this->post['full_name']) ?>

            <div id="share-buttons">
                <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
                    <img src="<?= APP_ROOT ?>/content/images/facebook.png" alt="Facebook"/>
                </a>
                <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
                    <img src="<?= APP_ROOT ?>/content/images/google+.png" alt="Google"/>
                </a>
                <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons"
                   target="_blank">
                    <img src="<?= APP_ROOT ?>/content/images/twitter.png" alt="Twitter"/>
                </a>
            </div>

        </div>
        <p class="content"><?= $this->post['content'] ?></p>
    </div>

    <div class="comment-block">
        <form method="post">
            <div id="title-comment">Leave a comment:</div>
            <div id="author">
                <input name="author" id="author" placeholder="     Enter your name..."/></div>
            <div id="comment">
                <textarea name="comment" placeholder="     Enter your comment..."></textarea>
            </div>
            <div id="button">
                <input type="submit" value="Comment"/>
            </div>
        </form>
    </div>
    

</main>
