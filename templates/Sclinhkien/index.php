<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sclinhkien> $sclinhkien
 */
?>
<div class="sclinhkien index content">
    <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sửa chữa linh kiện') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Id sửa chữa') ?></th>
                    <th><?= $this->Paginator->sort('Id linh kiện') ?></th>
                    <th><?= $this->Paginator->sort('Số lượng') ?></th>
                    <th class="actions"><?= __('Lựa chọn') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sclinhkien as $sclinhkien): ?>
                <tr>
                    <td><?= $this->Number->format($sclinhkien->id) ?></td>
                    <td><?= $sclinhkien->id_sua_chua === null ? '' : $this->Number->format($sclinhkien->id_sua_chua) ?></td>
                    <td><?= $sclinhkien->id_linh_kien === null ? '' : $this->Number->format($sclinhkien->id_linh_kien) ?></td>
                    <td><?= $sclinhkien->so_luong === null ? '' : $this->Number->format($sclinhkien->so_luong) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Hiển thị'), ['action' => 'view', $sclinhkien->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $sclinhkien->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $sclinhkien->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $sclinhkien->id)]) ?>
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
