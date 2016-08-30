<?php $this->title = 'Users'; ?>
<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/users-style.css"/>
</head>

<body background="<?= APP_ROOT ?>/content/images/background.jpg">
<main>
    <div class="users-block">

        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full name</th>
            </tr>

            <?php foreach ($this->users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['username']) ?></td>
                    <td><?= htmlspecialchars($user['full_name']) ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    
</main>
</body>