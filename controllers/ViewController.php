<?php
/**
 * Created by PhpStorm.
 * User: JB-NB-02
 * Date: 04.10.2017
 * Time: 14:56
 */

namespace app\controllers;


use app\models\Events;
use app\models\Eventscategories;
use yii\base\Event;
use yii\web\Controller;
use app\models\EventsSearch;
use Yii;
use app\models\ContactForm;
use ibrarturi\scrollup\ScrollUp;





/**
 * Class ViewController
 * @package app\controllers
 */
class ViewController extends Controller
{

    /**
     * @return string
     */
    public function actionIndex()
    {
        $galleryItems = [
            [
                'url' => '/img/galerie/deti.jpg',
                'src' => '/img/galerie/deti-a.jpg',
                'options' => array('title' => 'detsky kurz')
            ],[
                'url' => '/img/galerie/pes.jpg',
                'src' => '/img/galerie/pes-a.jpg',
                'options' => array('title' => 'náš věrný přítel')
            ],
            [
                'url' => '/img/galerie/pipa.jpg',
                'src' => '/img/galerie/pipa-a.jpg',
                'options' => array('title' => 'Pípa s velkým výběrem')
            ],
            [
                'url' => '/img/galerie/prednaska.jpg',
                'src' => '/img/galerie/prednaska-a.jpg',
                'options' => array('title' => 'ukázka přednášky')
            ],
            [
                'url' => '/img/galerie/Stena.jpg',
                'src' => '/img/galerie/Stena-a.jpg',
                'options' => array('title' => 'ukázka rekonstrukce')
            ],
            [
                'url' => '/img/galerie/zaovdy.jpg',
                'src' => '/img/galerie/zaovdy-a.jpg',
                'options' => array('title' => 'ukázka závodů')
            ]

        ];


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        $this->view->title = 'Rock´n´Wall';



        $events = Events::find()->where(['>=', 'date', date('Y-m-d')])->andWhere(['idCategories' => [1,2,4]])->orderBy('date ASC')->limit(8)->all();
        $eventsCategories = Eventscategories::find()->all();
        $events2 = Events::find()->where(['idCategories' => 3])->limit(8)->all();
        $eventsCategories2 = Eventscategories::find()->all();





        //print_r($Events);
        return $this->render('index', [
            'events' => $events,
            'eventsCategories' => $eventsCategories,
            'galleryItems' => $galleryItems,
            'events2' => $events2,
            'eventsCategories2' => $eventsCategories2,
            'model' => $model,
        ]);



    }

    /**
     * @return string
     */
    public function actionCalendar()
    {


        $events = Events::find()->where(['>=', 'date', date('Y-m-d')])->limit(8)->all();
        $eventsCategories = Eventscategories::find()->all();
        $events2 = Events::find()->where(['idCategories' => 3])->limit(8)->all();
        $eventsCategories2 = Eventscategories::find()->all();
        //print_r($Events);
        return $this->render('calendar', [
            'events' => $events,
            'eventsCategories' => $eventsCategories,
            'events2' => $events2,
            'eventsCategories2' => $eventsCategories2,


        ]);
    }

}

