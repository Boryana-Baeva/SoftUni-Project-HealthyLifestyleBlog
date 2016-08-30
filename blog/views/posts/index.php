<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/posts-style.css"/>
</head>
<body background="<?= APP_ROOT ?>/content/images/background.jpg">
<main>
    <div class="table-block">
    <table id="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($this->posts as $post) : ?>
            <tr>
                <td id="id"><?= htmlspecialchars($post['id']) ?></td>
                <td id="title"><?= htmlspecialchars($post['title']) ?></td>
                <td id="content"><?= cutLongText($post['content']) ?></td>
                <td id="date"><?= htmlspecialchars($post['date']) ?></td>
                <td id="full-name"><?= htmlspecialchars($post['full_name']) ?></td>
                <td id="actions">
                    <a class="tooltip" href="<?= APP_ROOT ?>/posts/edit/<?= htmlspecialchars($post['id']) ?>">
                        <img src="<?=APP_ROOT?>/content/images/edit.png"/>
                        <span class="tooltiptext">Edit</span>
                    </a>
                    <a class="tooltip" href="<?= APP_ROOT ?>/posts/delete/<?= htmlspecialchars($post['id']) ?>">
                        <img src="<?=APP_ROOT?>/content/images/delete.png"/>
                        <span class="tooltiptext">Delete</span>
                    </a>

                </td>
            </tr>
        <?php endforeach ?>
    </table>
    </div>
</main>
</body>