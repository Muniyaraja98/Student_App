<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use Yii as Y;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */

$this->title = $model->id;



$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gallery-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Gallery Images',
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function($model){
                    $gallery = '';
                    $images = explode('**',$model->image);
                    foreach($images as $key => $image){   
                    $gallery =$gallery.Html::img(Yii::$app->homeUrl.$image,['width'=>'150']);
                    }
                    return $gallery;
                },
            ],
        ],
    ]) ?>

    <!-- <div>
    <?php //foreach($images as $key => $image){
        ?>
        <img src="<?php //Yii::$app->homeUrl.$image ?>" width="100" height="100" />
        <?php //} ?>
    </div> -->

</div>
