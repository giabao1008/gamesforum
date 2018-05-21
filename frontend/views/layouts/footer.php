<?php
use console\models\games\Games;
$gameNews = Games::find()->orderBy(['create_at' => SORT_DESC ])->limit(8)->all();
 $url = 'http://gamesforum.vn/backend/web/uploads' ;
?>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-left-w3">
            <h4>Contact</h4>
            <ul>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
                <li><a href="mailto:example@mail.com"><h6>ex@mail.com</h6></a></li>
            </ul>
            <ul>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                <li><h6>+18045678834</h6></li>
            </ul>
            <ul>
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
                <li><h6>4th Avenue,London</h6></li>
            </ul>
            <ul>
                <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
                <li><h6>(0033)6544 5453 644</h6></li>
            </ul>
        </div>
        <div class="col-md-5 footer-middle-w3">
            <h4>Latest Games</h4>
            <?php
                foreach ($gameNews as $gameNew) {
            ?>
             <div class="col-md-3 img-w3-agile">
                   <a href="single.html"><img src="<?= $url ?>/<?= $gameNew->logo ?>" alt=" " /></a>
              </div>
            <?php  }?>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 footer-right-w3">
            <a href="index.html"><h4>Games <img src="images/f1.png" alt=" " /> Zone</h4></a>
            <p>Donec lobortis diam eu auctor porta. Phasellus in elementum tortor, sit amet imperdiet urna pellentesque non risus porta.</p>
            <p class="agileinfo">Suspendisse convallis malesuada libero, non rutrum arcu pellentesque lacinia.</p>
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
            <p>&copy; <?= date('Y') ?> Games Forum. All Rights Reserved | Design by Le0</p>
        </div>
    </div>
</div>
