<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $model */

$this->title = 'Update Product: ' . $model->title;
?>
<div class="product-update" style="background-color: #f0f0f0; padding: 40px 20px; min-height: 100vh;">

    <div class="container">
        <div class="row d-flex justify-content-center">
            <!-- Form Section -->
            <div class="col-md-8 col-lg-6">
                <div class="product-form bg-white rounded p-4 shadow-sm">
                    <h3 class="bg-success p-3 rounded mb-4 text-light fw-bold"><?= Html::encode($this->title) ?></h3>
                    
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'class' => 'form-control form-control-lg']) ?>
                    <?= $form->field($model, 'description')->textarea(['rows' => 6, 'class' => 'form-control form-control-lg']) ?>
                    <?= $form->field($model, 'category')->textInput(['class' => 'form-control form-control-lg']) ?>

                    <div class="form-group mt-4">
                        <?= Html::submitButton('Update', ['class' => 'btn btn-success btn-lg']) ?>
                        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-secondary btn-lg ms-3']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
