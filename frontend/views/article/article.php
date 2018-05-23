<?php $this->title = ($art) ? $art->title : 'Not found'; ?>
<div class="article row">
    <div class="banner col-lg-offset-3 col-md-6">
        <img src="http://gamesforum.vn/backend/web/uploads/<?= $art->image ?>" alt="<?= $art->image ?> ">
    </div>
    <h3><?= $art->title ?></h3>
    <?= $art->body ?>
    <div class="write-by col-md-12 text-right"><?= $art->create_by ?></div>

</div>
