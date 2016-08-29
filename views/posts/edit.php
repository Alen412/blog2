<?php $this->title="Edit Existing post"; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<div id="floating-left">
<form method="post">
    <div>Title:</div>
    <input type="text" id="post-title" name="post_title" value="<?=
htmlspecialchars($this->post['title'])?>">
    <div>Category</div>
    <select name="category">
        <option value="Computer science">Computer Science</option>
        <option value="Innovations">Innovations</option>
        <option value="Animals">Animals</option>
        <option value="Cars">Cars</option>
    </select>
    <div>Content:</div>
    <textarea id='post-content' rows="10" name="post_content"><?=
htmlspecialchars($this->post['content'])?></textarea>
    <div>Date (yyyy-MM-dd hh:mm:ss):</div>
    <input type="text" name="post_date" value="<?=
htmlspecialchars($this->post['date'])?>">
    <div>Author ID:</div>
    <input type="text" name="user_id" value="<?=
htmlspecialchars($this->post['user_id'])?>">
    <div><input type="submit" value="Edit">
    <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>

</form>
    </div>