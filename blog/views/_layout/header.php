<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/styles.css"/>
    <link rel="icon" href="<?= APP_ROOT ?>/content/images/icon.jpg"/>
    <script src="<?= APP_ROOT ?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>

<header>
    <a href="<?= APP_ROOT ?>"><img src="<?= APP_ROOT ?>/content/images/logo.png"></a>
    <?php if ($this->isLoggedIn) : ?>
        <div id="logged-in-info">
            <div class="chip">
                <img src="<?= APP_ROOT ?>/content/images/avatar.png" alt="Person" width="96" height="96">
                <span>Hello, <b><?= htmlspecialchars($_SESSION['username']) ?></b></span>
            </div>

            <form method="post" action="<?= APP_ROOT ?>/users/logout">
                <input type="submit" value="Logout"/>
            </form>
        </div>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
        <div id="menu">
            <ul class="tab">
                <li><a href="<?= APP_ROOT ?>/" accesskey="1" title="Home">Home</a></li>
                <li><a href="<?= APP_ROOT ?>/posts" accesskey="2" title="Posts">Posts</a></li>
                <li><a href="<?= APP_ROOT ?>/posts/create" accesskey="3" title="Create Post">Create Post</a></li>
                <li><a href="<?= APP_ROOT ?>/users" accesskey="4" title="Users">Users</a></li>
                <li><a href="<?= APP_ROOT ?>/comments" accesskey="5" title="Comments">Comments</a></li>
            </ul>
        </div>
    <?php else: ?>
        <div id="menu">
            <ul class="tab">
                <li><a href="<?= APP_ROOT ?>/" accesskey="1" title="Home">Home</a></li>
                <li><a href="<?= APP_ROOT ?>/users/login" accesskey="2" title="Login">Login</a></li>
                <li><a href="<?= APP_ROOT ?>/users/register" accesskey="3" title="Register">Register</a></li>
            </ul>
        </div>
    <?php endif; ?>

</header>

<?php require_once('show-notify-messages.php'); ?>

