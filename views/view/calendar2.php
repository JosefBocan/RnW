<?php
/**
 * Created by PhpStorm.
 * User: JB-NB-02
 * Date: 04.10.2017
 * Time: 17:49
 *
 * @var \app\models\Events[] $events
 * @var \app\models\Eventscategories[] $eventsCategories
 */

use app\classes\Tools;
use yii\bootstrap\Carousel;
use yii\helpers\Html;

?>




<div class="text-center color services-text-info-background container-fluid">
    <h3>
        Nadcházející události v Rock´n´Wallu
    </h3>
</div>
<div class="container-fluid services-text-info-background">
    <div  class="row container center-block"  id="events" xmlns="http://www.w3.org/1999/html">
        <?php ;
        foreach ($events as $event) {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3 event">

                <div class="img-event" style="background: url('<?= $event->idCategories0->picture ?>');" >
                    <div class=" img-thumbnail text-center" >
                    <span>

                        <?=Tools::getNameOfDay(date("N", strtotime( $event->date))) ?> </span> </br>
                        <span><?= date("d", strtotime( $event->date)) ?></span>
                        <span></span>
                    </div>
                </div>


                <div class="event-info ">
                    <h2><?= $event->title ?></h2>
                    <p>
                        <?= $event->info ?>
                    </p>

                </div>
                <div class="event-time">
                    <?= date("H:i",strtotime($event->date)) ?>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<div class="text-center color services-text-info-background container-fluid">
    <h3>
        Nadcházející lezecké kurzy
    </h3>
</div>

<div class="container-fluid services-text-info-background">
    <div  class="row container center-block"  id="events" xmlns="http://www.w3.org/1999/html">
        <?php ;
        foreach ($events2 as $event2) {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3 event">

                <div class="img-event" style="background: url('<?= $event2->idCategories0->picture ?>');" >
                    <div class=" img-thumbnail text-center" >
                    <span>

                        <?=Tools::getNameOfDay(date("N", strtotime( $event->date))) ?> </span> </br>
                        <span><?= date("d", strtotime( $event->date)) ?></span>
                        <span></span>
                    </div>
                </div>


                <div class="event-info ">
                    <h2><?= $event2->title ?></h2>
                    <p>
                        <?= $event2->info ?>
                    </p>

                </div>
                <div class="event-time">
                    <?= date("H:i",strtotime($event2->date)) ?>
                    <?php echo "-"; ?>
                    <?= date('H:i',strtotime('+2 hour +00 minutes',strtotime($event2->date))) ?>
                </div>
            </div>
        <?php } ?>

    </div>
</div>





<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
             </div>-->
            <div class="modal-body">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Nápojový lístek</h5>


                <div class="Image">
                    <img src="/img/menu.png" class="img-responsive" title="Rafique" alt="Rafique">
                    <img src="/img/menu.png" class="img-responsive" title="Rsafique" alt="Rafique">
                </div>

                <button type="button" class="btn btn-secondary center-block" data-dismiss="modal">Zavři</button>
            </div>

        </div>
    </div>
</div>

<img src="/img/kurz.png" alt="ss" width="151" height="auto" class="btn " data-toggle="modal" data-target="#exampleModalLong">


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="drinklist">





                        </div>

                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
        </div>
    </div>
</div>
</div>




