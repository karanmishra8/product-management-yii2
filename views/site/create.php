<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $product */

$this->title = 'Add Product';
?>
<div class="product-create">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Form Section -->
            <div class="col-md-8 col-lg-6">
                <div class="product-form mt-4 rounded p-4" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <h1 class="bg-success p-3 rounded mb-4 text-white fw-bold text-center"><?= Html::encode($this->title) ?></h1>
                    
                    <?php $form = ActiveForm::begin(); ?>

                    <div class="mb-3">
                        <?= $form->field($product, 'title')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => 'Enter product title']) ?>
                    </div>

                    <div class="mb-3">
                        <?= $form->field($product, 'description')->textarea(['rows' => 6, 'class' => 'form-control', 'placeholder' => 'Enter product description']) ?>
                    </div>

                    <div class="mb-3">
                        <?= $form->field($product, 'category')->textInput(['class' => 'form-control', 'placeholder' => 'Enter product category']) ?>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                        <?= Html::a('Back', Yii::$app->request->referrer, ['class' => 'btn btn-dark']) ?>
                    </div>
                    
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <!-- Image Section -->
            
        </div>
    </div>
</div>
