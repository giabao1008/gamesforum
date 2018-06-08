<?php foreach ($games as $item) { ?>
    <div class="pop-up">
        <div id="small-dialog-<?= $item->id ?>" class="mfp-hide book-form">
            <div class="pop-up-content-agileits-w3layouts">
                <div class="col-md-6 w3ls-left">
                    <img src="http://gamesforum.vn/backend/web/uploads/<?= $item->logo ?>" alt=" " class="img-responsive zoom-img"/>
                </div>
                <div class="col-md-6 w3ls-right">
                    <h4><?= $item->name ?></h4>
                    <p><?= $item->description ?></p>

                    <div class="span span1">
                        <p class="left">Loại :</p>
                        <p class="right"> <?= $item->gameType->name  ?></p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="span span2">
                        <p class="left">Tác giả : </p>
                        <p class="right"> <?= $item->author ?></p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="span span3">
                        <p class="left">Cấu hình đề nghị :</p>
                        <p class="right"> <?= $item->require ?></p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- gallery -->
<div class="gallery-w3layouts" id="gallery">
    <div class="container">
        <div class="upload-game text-right">
            <?php if(yii::$app->user->isGuest ){?> <a class="btn btn-default btn-md disabled"> <i class="glyphicon glyphicon-ban-circle"> </i> Bạn vui lòng đăng nhập để sử dụng chức năng này </a> <?php } else { ?>
                <a class="btn btn-success btn-md" href="upload">Thêm game mới <i class="glyphicon glyphicon-plus"> </i></a>
            <?php } ?>
        </div>
        <h2>12 Game mới nhất</h2>
        <div class="gallery-grids">

            <?php foreach ($games as $item) { ?>
                <div class="gallery-grid">
                    <a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s"
                       href="#small-dialog-<?= $item->id ?>">
                        <img src="http://gamesforum.vn/backend/web/uploads/<?= $item->logo ?>" alt=" "
                             class="img-responsive zoom-img"/>
                    </a>
                </div>
            <?php } ?>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//gallery -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
