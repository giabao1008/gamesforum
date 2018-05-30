<?php $this->title = ($art) ? $art->title : 'Not found'; ?>
<div class="article article-bg">

   <div class="col-md-12">
       <div class="banner-small">
           <h3><?= $art->title ?></h3>
           <img src="http://gamesforum.vn/backend/web/uploads/<?= $art->image ?>" alt="<?= $art->image ?> ">
       </div>
   </div>

   <div class="container">
       <?= $art->body ?>
       <div class="write-by col-md-12 text-right" style="color: #9D1E15; text-transform:"><i><?= $art->create_by ?> </i></div>
   </div>


</div>
