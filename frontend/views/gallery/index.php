<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gallery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

        //    'id',
            [
                'label' => 'Gallery Images',
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function($model){
                    $gallery = '';
                    $images = explode('**',$model->image);
                    foreach($images as $key => $image){   
                    $gallery =$gallery.Html::img(Yii::$app->homeUrl.$image,['height'=>'150', 'width'=>'150']);
                    }
               
                    return $gallery;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    


</div>
