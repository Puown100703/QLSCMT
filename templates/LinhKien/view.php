<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinhKien $linhKien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $linhKien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $linhKien->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $linhKien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách linh kiện'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Tạo mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="linhKien view content">
            <h3><?= h($linhKien->ten_linh_kien) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tên linh kiện') ?></th>
                    <td><?= h($linhKien->ten_linh_kien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($linhKien->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Số lượng') ?></th>
                    <td><?= $linhKien->so_luong === null ? '' : $this->Number->format($linhKien->so_luong) ?></td>
                </tr>
                <tr>
                    <th><?= __('Giá') ?></th>
                    <td><?= $linhKien->gia === null ? '' : $this->Number->format($linhKien->gia) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mô tả') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($linhKien->mo_ta)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
