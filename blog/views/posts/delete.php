<?php $this->title = 'Delete Post'; ?>

<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/delete-post-style.css"/>
    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</head>

<body background="<?= APP_ROOT ?>/content/images/background.jpg">
<h1><?= htmlspecialchars($this->title) ?></h1>
<div class="delete-block">
    <form method="post">
        <div id="title">Title:
        <input type="text" name="post_title" disabled value="<?= htmlspecialchars($this->post['title']) ?>"/></div>
        <div id="content">
        <textarea id="mytextarea" rows="10" name="post_content" disabled><?= htmlspecialchars($this->post['content']) ?></textarea>
        </div>
        <div id="button"><input type="submit" value="Delete"/>
            <a href="<?= APP_ROOT ?>/posts">Cancel</a></div>
    </form>
</div>
</body>