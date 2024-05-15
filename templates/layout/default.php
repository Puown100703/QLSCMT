<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <?= $this-> Html -> link('Khách hàng', [
                'controller' => 'khachhang',
                'action' => 'index'
            ]) ?>

            <?= $this-> Html -> link('Máy tính', [
                'controller' => 'maytinh',
                'action' => 'index'
            ]) ?>

            <?= $this-> Html -> link('Nhân viên', [
                'controller' => 'nhanvien',
                'action' => 'index'
            ]) ?>

            <?= $this-> Html -> link('Sửa chữa', [
                'controller' => 'suachua',
                'action' => 'index'
            ]) ?>

            <?= $this-> Html -> link('Sửa chữa_linh kiện', [
                'controller' => 'sclinhkien',
                'action' => 'index'
            ]) ?>

            <?= $this-> Html -> link('Linh kiện', [
                'controller' => 'linhKien',
                'action' => 'index'
            ]) ?>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
