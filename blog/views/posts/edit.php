<?php $this->title = 'Edit Post'; ?>

<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/edit-post-style.css"/>
    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: "#mytextarea",
            plugins: "image imagetools, code,textcolor,link,advlist,media,paste,table",
            menubar: "file,edit,view,format,insert",
            toolbar: "undo,redo,styleselect, bold, italic,forecolor, backcolor, alignleft, aligncenter, alignright, bullist, numlist, outdent, indent, code,image,link,media,paste,table",
            image_caption: true
        });
    </script>
</head>

<body background="<?= APP_ROOT ?>/content/images/background.jpg">
    <h1><?= htmlspecialchars($this->title)?></h1>
<div class="edit-block">
    <form method="post">
        <div id="title">Title:
        <input type="text" name="post_title" value="<?=htmlspecialchars($this->post['title'])?>"/></div>
        <div id="date">Date:
            <input type="text" name="post_date" value="<?=htmlspecialchars($this->post['date'])?>" placeholder="(yyyy-MM-dd hh:mm:ss)"/></div>
        <div id="author">Author:
            <input type="text" name="user_id" value="<?=htmlspecialchars($this->post['user_id'])?>"/></div>
        <div id="content">
        <textarea id="mytextarea" rows="10" name="post_content"><?=htmlspecialchars($this->post['content'])?></textarea></div>

        <div id="button"><input type="submit" value="Edit">
            <a id="cancel" href="<?=APP_ROOT?>/posts">Cancel</a></div>
    </form>
</div>
    
</body>