<?php $this->title="Create new post"; ?>
<h1><?=htmlspecialchars($this->title)?></h1>
<div id="floating-left">
<form method="post">
    <div>Title:</div>
    <input type="text" id="post-title" name="post_title">
    <div>Category:</div>
    <select name="category">
            <option value="Computer science">Computer Science</option>
            <option value="Innovations">Innovations</option>
            <option value="Animals">Animals</option>
            <option value="Cars">Cars</option>
    </select>
    <div>Content:</div>
    <textarea id='post-content' rows="10" name="post_content"></textarea>
    <div><input type="submit" value="Create">
    <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>
</div>