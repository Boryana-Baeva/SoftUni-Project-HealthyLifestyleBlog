<?php $this->title = 'Login'; ?>

<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/login-style.css"/>
</head>

<body background="<?= APP_ROOT ?>/content/images/background.jpg">
<h1><?= htmlspecialchars($this->title) ?></h1>

<div class="login-block">
    <form method="post">
        <div id="username">Username: <input type="text" name="username" placeholder="Enter username"/></div>
        <div id="password">Password: <input type="password" name="password" placeholder="Enter password"/></div>
        <div id="button"><input type="submit" value="Login"/></div>
    </form>
    </div>
</body>