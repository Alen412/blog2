<?php $this->title = 'Posts by Category';?>

<div class="container">
    <h1><?=htmlspecialchars($this->title)?></h1>
    <form id="form1" name="form1" method="post">
        <select name="category" id="form">
            <option value="Computer science">Computer Science</option>
            <option value="Innovations">Innovations</option>
            <option value="Animals">Animals</option>
            <option value="Cars">Cars</option>
        </select>

        <input type="submit" id="category-submit" value="Choose category"/>

        </form>
<br><br>
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
        <?php

        $category = isset($_POST['category']) ? $_POST['category'] : false;
        foreach($this->posts as $post)
        {

            if($post['category']==$category)
            {?>
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
        <?php
            }
        }
        ?>
    </table>
    <a href="<?=APP_ROOT?>/posts">[All posts]</a>
</div>