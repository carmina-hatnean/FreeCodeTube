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

    <div>

        <div class="upload-icon">
            <i class="fa-regular fa-arrow-up-from-bracket"></i>
        </div>

        <p>Drag and drop video files to upload</p>
        <p class="text-muted">Your videos will be private until you publish them.</p>

        <button class="btn btn-primary btn-file">
            Select File
            <input type="file" id="videoFile" name="video">
        </button>
    </div>

</div>
