<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khachhang $khachhang
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Chỉnh sửa'), ['action' => 'edit', $khachhang->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $khachhang->id], ['confirm' => __('Bạn có muốn xóa {0}?', $khachhang->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách Khách hàng'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="khachhang view content">
            <h3><?= h($khachhang->ten_KH) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tên Khách hàng') ?></th>
                    <td><?= h($khachhang->ten_KH) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($khachhang->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Số điện thoại') ?></th>
                    <td><?= h($khachhang->so_dt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($khachhang->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Địa chỉ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($khachhang->dia_chi)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
