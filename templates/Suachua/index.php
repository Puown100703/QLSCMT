<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Suachua> $suachua
 */
?>
<div class="suachua index content">
    <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sửa chữa') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id Máy tính') ?></th>
                    <th><?= $this->Paginator->sort('Ngày bắt đầu') ?></th>
                    <th><?= $this->Paginator->sort('Ngày kết thúc') ?></th>
                    <th><?= $this->Paginator->sort('Chi phí') ?></th>
                    <th><?= $this->Paginator->sort('id Nhân viên') ?></th>
                    <th class="actions"><?= __('Lựa chọn') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suachua as $suachua): ?>
                <tr>
                    <td><?= $this->Number->format($suachua->id) ?></td>
                    <td><?= $suachua->id_mayTinh === null ? '' : $this->Number->format($suachua->id_mayTinh) ?></td>
                    <td><?= h($suachua->ngay_bat_dau) ?></td>
                    <td><?= h($suachua->ngay_ket_thuc) ?></td>
                    <td><?= $suachua->chi_phi === null ? '' : $this->Number->format($suachua->chi_phi) ?></td>
                    <td><?= $suachua->id_nhanVien === null ? '' : $this->Number->format($suachua->id_nhanVien) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Hiển thị'), ['action' => 'view', $suachua->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $suachua->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $suachua->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $suachua->id)]) ?>
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
