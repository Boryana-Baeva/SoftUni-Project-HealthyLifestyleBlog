<?php $this->title = 'Register'; ?>

<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/register-style.css"/>
</head>

<body background="<?= APP_ROOT ?>/content/images/background.jpg">
    <h1><?= htmlspecialchars($this->title) ?></h1>
<div class="register-block">
    <form method="post">
        <div id="username">* Username: <input type="text" name="username" placeholder="Enter username" required/></div>
        <div id="password">* Password: <input type="password" name="password" placeholder="Enter password" required/></div>
        <div id="confirm">* Confirm: <input type="password" name="password_confirm" placeholder="Confirm password" required/></div>
        <div id="full-name">Full Name: <input type="text" name="full_name" placeholder="Enter full name"/></div>
        <div id="button"><input type="submit" value="Register"/></div>
    </form>
</div>
</body>
