<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nhanvien $nhanvien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $nhanvien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $nhanvien->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $nhanvien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách Nhân viên'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Thêm mới Nhân viên'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="nhanvien view content">
            <h3><?= h($nhanvien->ten_nv) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tên Nhân viên') ?></th>
                    <td><?= h($nhanvien->ten_nv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($nhanvien->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Số điện thoại') ?></th>
                    <td><?= h($nhanvien->so_dt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($nhanvien->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Địa chỉ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($nhanvien->dia_chi)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
