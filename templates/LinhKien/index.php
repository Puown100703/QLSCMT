<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LinhKien> $linhKien
 */
?>
<div class="linhKien index content">
    <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Linh Kiện') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Tên linh kiện') ?></th>
                    <th><?= $this->Paginator->sort('Số lượng') ?></th>
                    <th><?= $this->Paginator->sort('Giá') ?></th>
                    <th class="actions"><?= __('Lựa chọn') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($linhKien as $linhKien): ?>
                <tr>
                    <td><?= $this->Number->format($linhKien->id) ?></td>
                    <td><?= h($linhKien->ten_linh_kien) ?></td>
                    <td><?= $linhKien->so_luong === null ? '' : $this->Number->format($linhKien->so_luong) ?></td>
                    <td><?= $linhKien->gia === null ? '' : $this->Number->format($linhKien->gia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Hiển thị'), ['action' => 'view', $linhKien->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $linhKien->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $linhKien->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $linhKien->id)]) ?>
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
