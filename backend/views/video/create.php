<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Video $model */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex flex-column justify-content-center align-items-center"

<div>
    <div class="upload-icon">
        <i class="fa-regular fa-arrow-up-from-bracket"></i>
    </div>
    <br>
    <p class="m-0">Drag and drop video files to upload</p>
    <br>
    <p class="text-muted">Your videos will be private until you publish them.</p>

    <?php \yii\widgets\ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
    ]) ?>

    <button class="btn btn-primary btn-file">
        Select File
        <input type="file" id="videoFile" name="video">
    </button>

    <?php \yii\widgets\ActiveForm::end() ?>

</div>
</div>
