<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nhanvien> $nhanvien
 */
?>
<div class="nhanvien index content">
    <?= $this->Html->link(__('Nhân viên mới'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nhân viên') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Tên nhân viên') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Số đt') ?></th>
                    <th class="actions"><?= __('Lựa chọn') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nhanvien as $nhanvien): ?>
                <tr>
                    <td><?= $this->Number->format($nhanvien->id) ?></td>
                    <td><?= h($nhanvien->ten_nv) ?></td>
                    <td><?= h($nhanvien->email) ?></td>
                    <td><?= h($nhanvien->so_dt) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Hiển thị'), ['action' => 'view', $nhanvien->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $nhanvien->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $nhanvien->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $nhanvien->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('đầu')) ?>
            <?= $this->Paginator->prev('< ' . __('trước')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('tiếp') . ' >') ?>
            <?= $this->Paginator->last(__('sau') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Trang {{page}} của {{pages}}, hiển thị {{current}} bản ghi trên tổng số {{count}} bản ghi')) ?></p>
    </div>
</div>
