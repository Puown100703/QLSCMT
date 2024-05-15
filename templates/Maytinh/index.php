<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Maytinh> $maytinh
 */
?>
<div class="maytinh index content">
    <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Máy tính') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nhãn hàng') ?></th>
                    <th><?= $this->Paginator->sort('Mẫu mã') ?></th>
                    <th><?= $this->Paginator->sort('Số serial') ?></th>
                    <th><?= $this->Paginator->sort('Ngày mua') ?></th>
                    <th><?= $this->Paginator->sort('Ngày hết hạn bảo hành') ?></th>
                    <th class="actions"><?= __('Lựa chọn') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($maytinh as $maytinh): ?>
                <tr>
                    <td><?= $this->Number->format($maytinh->id) ?></td>
                    <td><?= h($maytinh->nhan_hang) ?></td>
                    <td><?= h($maytinh->mau_ma) ?></td>
                    <td><?= h($maytinh->so_serial) ?></td>
                    <td><?= h($maytinh->ngay_mua) ?></td>
                    <td><?= h($maytinh->ngay_het_han_bao_hanh) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Hiển thị'), ['action' => 'view', $maytinh->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $maytinh->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $maytinh->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $maytinh->id)]) ?>
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
