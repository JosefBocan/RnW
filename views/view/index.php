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

/**
 * @var array $galleryItems
 */

?>
<div class="row" id="home">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item item-1 active">
            </div>

            <div class="item item-2">
            </div>

            <div class="item item-3">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control " href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="row info">
    <div class="col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3>
                        30m² Lezecké stěny + bar
                    </h3>
                    <p>Nejstarší boulder v Plzni. Fungující od roku 2013. Pořádající přednášky, závody,
                        dětské kurzy, benefiční aktivity a mnoho dalšího...

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row services" id="services">
    <div class="col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 text-center">
                    <a href="#courses">
                    <img class="" src="/img/Kurzy_icon.png" alt="ss">
                    <div class="services-info">
                        <h3>Lezecké kroužky</h3>
                        <p>
                            Nabízíme lezecké kurzy pro děti i mladistvé.
                        </p>
                    </div>
                </div>
                </a>
                <div class="col-xs-12 col-sm-6 col-md-3 text-center" class="btn " data-toggle="modal" data-target="#exampleModalLong">
                    <img src="/img/services_icon.png" alt="ss">
                    <div class="services-info">
                        <h3>Nabídka nápojů</h3>
                        <p>
                            Nabídka mnoha pohoných hmot k zlepšení rychlosti i výkonu
                        </p>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
                             </div>-->
                            <div class="modal-body">
                                <h5 class="modal-title text-center" id="exampleModalLongTitle">Nápojový lístek</h5>


                                <div class="Image">
                                    <img src="/img/menu.png" class="img-responsive" title="Rafique" alt="Rafique">

                                </div>

                                <button type="button" class="btn btn-secondary center-block" data-dismiss="modal">Zavři</button>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-6 col-md-3 text-center" >
                    <a href="#events">
                    <img src="/img/events_icon.png" alt="ss">
                    <div class="services-info">
                        <h3>Události</h3>
                        <p>
                            Nudíte se doma? Přijdte k nám určitě máme různorodý program.
                        </p>
                    </div>
                       </a>
                </div>

                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <!-- <div class="modal-header">
                                 </div>-->
                                <div class="modal-body">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Nápojový lístek</h5>


                                    <div class="Image">
                                        <img src="/img/menu.png" class="img-responsive" title="Rafique" alt="Rafique">

                                    </div>

                                    <button type="button" class="btn btn-secondary center-block" data-dismiss="modal">Zavři</button>
                                </div>

                            </div>
                        </div>
                    </div>


                <div class="col-xs-12 col-sm-6 col-md-3 text-center">
                    <a href="#galerie">
                    <img src="/img/gallery_icon.png" alt="ss">
                    <div class="services-info">
                        <h3>Galerie</h3>
                        <p>
                            Něco málo z naší rodinné sbírky fotografií...
                        </p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row info" id="events">
    <div class="col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3>
                        Blízké události v R´n´W
                    </h3>
                    <p>Pojď te si k nám zvednout náladu. Nabízíme mnoho kulturních aktivit od přednášek až po porovnání sil se soupeři.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="container center-block" >
            <?php ;
            foreach ($events as $event) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-3 event">
                    <div class="img-event" style="background: url('<?= $event->idCategories0->picture ?>');">
                        <div class=" img-thumbnail text-center">
                    <span>
                        <?= Tools::getNameOfDay(date('N', strtotime($event->date))) ?> </span> </br>
                            <span><?= date('d.m.', strtotime($event->date)) ?></span>
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
                        <?= date('H:i', strtotime($event->date)) ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<div class="row info" id="courses">
    <div class="col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3>
                        Lezecké kurzy
                    </h3>
                    <p>Nabízíme lezecké kurzy pro děti i mládež. Přehled lezeckých kroužků naleznete zde.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="container center-block" id="">
            <?php ;
            foreach ($events2 as $event2) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-3 event">

                    <div class="img-event" style="background: url('<?= $event2->idCategories0->picture ?>');">
                        <div class=" img-thumbnail text-center">
                    <span>

                        <?= Tools::getNameOfDay(date("N", strtotime($event2->date))) ?> </span> </br>
                            <span><?= date("d.m.", strtotime($event2->date)) ?></span>
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
                        <?= date("H:i", strtotime($event2->date)) ?>
                        <?php echo "-"; ?>
                        <?= date('H:i',strtotime('+2 hour +00 minutes',strtotime($event2->date))) ?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>


<div class="row info" id="galerie">
    <div class="col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3>
                        Galerie
                    </h3>
                    <p>Něco málo z naší rodinné sbírky fotografií.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row gallery text-center" id="galerie">
    <div class="col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 items">
                    <?php try {
                        echo dosamigos\gallery\Gallery::widget([
                            'items' => $galleryItems,
                        ]);
                    } catch (Exception $e) {
                        echo 'Galerii se nepovedlo načíst.';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="row info-contact" id="info-contact">
    <div class="container ">
        <div class="row-fluid">
            <div class="span8">
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJJzsl6O_xCkcRFK9KhquGcA0&key=AIzaSyBm9RwtUTXBiU0WmlG3Sxaxevm_HGN7aho"></iframe>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                <div class="info-contact-content ">

                    <h2>Rock´n´Wall</h2>
                    <address>
                        <strong>Plzeň</strong><br>
                        Sady 5. května 24<br>
                        Telefon:  602 305 222
                    </address>


                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-center info-contact-content">
                <img src="/img/RnW_Logo.png" alt="logo_rnw" >
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-Left">
                <div class="info-contact-content ">
                    <h2>Otevírací doba:</h2>
                    Pondělí: 15  - 18hod<br>
                    Úterý: 15  - 18hod<br>
                    Středa: 15  - 18hod<br>
                    Čtvrtek: 15  - 18hod<br>
                    Pátek: 15  - 24hod<br>
                    Sobota: 15  - 24hod<br>
                    Neděle: 18  - 23hod<br>
                </div>
            </div>



        </div>
    </div>


</div>

<?php try {
    echo \ibrarturi\scrollup\ScrollUp::widget(['theme' => 'image'
    ]);
} catch (Exception $e) {
    echo 'Galerii se nepovedlo načíst.';
} ?>


