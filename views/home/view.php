<?php $this->title =$this->post['title']; ?>


<h1><?=htmlspecialchars($this->title)?></h1>


<main id="posts">
    <article>
        <div class="date"><i>Posted on</i>
        <?=(new DateTime($this->post['date']))->format('d-M-y')?>
        <i>by </i><strong><?=htmlentities($this->post['full_name'])?></strong>
        </div>
        <p class="content"><?=$this->post['content']?></p>
    </article>
</main>

