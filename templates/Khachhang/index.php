<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Khachhang> $khachhang
 */
?>
<div class="khachhang index content">
    <?= $this->Html->link(__('Thêm Khách Hàng'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Khách Hàng') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Tên Khách hàng') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Số đt') ?></th>
                    <th class="actions"><?= __('Chọn') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($khachhang as $khachhang): ?>
                <tr>
                    <td><?= $this->Number->format($khachhang->id) ?></td>
                    <td><?= h($khachhang->ten_KH) ?></td>
                    <td><?= h($khachhang->email) ?></td>
                    <td><?= h($khachhang->so_dt) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Hiển thị'), ['action' => 'view', $khachhang->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $khachhang->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $khachhang->id], ['confirm' => __('Bạn có muốn xóa {0}?', $khachhang->id)]) ?>
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
