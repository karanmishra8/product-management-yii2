<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Product[] $products */

$this->title = 'Product Management';
?>
<div class="site-index" style="background-color: #f0f0f0; padding: 20px; min-height: 100vh;">

    <div class="jumbotron text-center bg-transparent mt-2 mb-3">
        <h1 class="display-4 fw-bold text-secondary">Product Management</h1>

        <div class="w-100 d-flex justify-content-start align-items-center">
            <?= Html::a('+ Add New Product', ['create'], ['class' => 'fs-5 fw-bold btn btn-success mt-3 mb-4']) ?>
        </div>

        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
            <style>
                .table-responsive {
                    position: relative;
                }
                .table-responsive::-webkit-scrollbar {
                    width: 8px;
                }
                .table-responsive::-webkit-scrollbar-thumb {
                    background-color: #888;
                    border-radius: 4px;
                }
                .table-responsive::-webkit-scrollbar-thumb:hover {
                    background-color: #555;
                }
                .table th, .table td {
                    padding: 15px;
                }
                .table tr:hover {
                    background-color: #e9ecef;
                }
                .table thead th {
                    background-color: #dee2e6;
                    position: sticky;
                    top: 0;
                    z-index: 1;
                }
                body {
                    background-color: #f0f0f0;
                }
                .table {
                    background-color: #ffffff;
                    border-radius: 8px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
                .table-primary {
                    background-color: #e9ecef;
                }
                .btn-success, .btn-danger {
                    border-radius: 4px;
                }
            </style>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">S.No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $index => $product) : ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= Html::encode($product->title) ?></td>
                            <td><?= Html::encode($product->description) ?></td>
                            <td><?= Html::encode($product->category) ?></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    <?= Html::a('Edit', ['update', 'id' => $product->Id], ['class' => 'btn btn-success']) ?>
                                    <?= Html::a('Delete', ['site/delete', 'id' => $product->Id], [
                                        'class' => 'btn btn-danger',
                                        'data' => [
                                            'confirm' => 'Are you sure you want to delete this item?',
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
