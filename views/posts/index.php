<?php $this->title = 'Posts';?>
<h1><?=htmlspecialchars($this->title)?></h1>
<div class="container">
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>
        <th>Date</th>
        <td>Author ID</td>
        <th>Action</th>
    </tr>
    <?php foreach ($this->posts as $post):?>
    <tr>
        <td><?=$post['id']?></td>
        <td><?=htmlspecialchars($post['title'])?></td>
        <td><?=$post['content']?></td>
        <td><?=$post['category']?></td>
        <td><?=htmlspecialchars($post['date'])?></td>
        <td><?=$post['user_id']?></td>
        <td><a href="<?=APP_ROOT?>/posts/edit/<?=$post['id']?>">[Edit]</a>
            <a href="<?=APP_ROOT?>/posts/delete/<?=$post['id']?>">[Delete]</a>
        </td>
    </tr>
<?php endforeach;?>
</table>
<a href="<?=APP_ROOT?>/posts/create">[Create New]</a>
</div>