<?php $this->title="Create new post"; ?>
<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" id="post-title" name="post_title">
    <div>Content:</div>
    <textarea rows="10" id="post-content-textarea" name="post_content"></textarea>
    <div><input type="submit" value="Create">
    <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>
