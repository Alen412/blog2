<?php $this->title = 'Posts';?>
<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Author ID</th>
        <th>Action</th>
    </tr>
    <?php foreach ($this->posts as $post):?>
    <tr>
        <td><?=$post['id']?></td>
        <td id="table-title"><?=htmlspecialchars($post['title'])?></td>
        <td id="table-content"><?=$post['content']?></td>
        <td id="table-date"><?=htmlspecialchars($post['date'])?></td>
        <td id="table-id"><?=$post['user_id']?></td>
        <td><a href="<?=APP_ROOT?>/posts/edit/<?=$post['id']?>">[Edit]</a>
            <a href="<?=APP_ROOT?>/posts/delete/<?=$post['id']?>">[Delete]</a>
        </td>
    </tr>
<?php endforeach;?>
</table>
<a href="<?=APP_ROOT?>/posts/create">[Create New Post]</a>
