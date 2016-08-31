<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/comment-style.css"/>
</head>
<body background="<?= APP_ROOT ?>/content/images/background.jpg">
<main>

    <?php foreach ($this->comments as $comment) : ?>

        <div class="comment-display-block" id="comment">
            <div id="display-author"><?= htmlspecialchars($comment['author']) ?><label> commented:</label></div>
            <div id="display-date"><?= htmlspecialchars($comment['date']) ?></div>
            <article id="display-comment"><?= htmlspecialchars($comment['comment']) ?></article>
            <div id="display-post-id">on post № <?= htmlspecialchars($comment['post_id']) ?></div>
        </div>
    <?php endforeach ?>

    <div class="comment-block">
        <form method="post">
            <div id="title-comment">Leave a comment:</div>
            <div id="author">
                <input name="author" id="author" placeholder="     Enter your name..."/></div>
            <div id="postId">
                <input name="postId" id="postId" placeholder="     Enter number of post..."/></div>
            <div id="comment">
                <textarea name="comment" placeholder="     Enter your comment..."></textarea>
            </div>
            <div id="button">
                <input type="submit" value="Comment"/>
            </div>
        </form>
    </div>
</main>
</body>