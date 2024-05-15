<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maytinh $maytinh
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $maytinh->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $maytinh->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $maytinh->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách máy tính'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="maytinh view content">
            <h3><?= h($maytinh->nhan_hang) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nhãn Hàng') ?></th>
                    <td><?= h($maytinh->nhan_hang) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mẫu mã') ?></th>
                    <td><?= h($maytinh->mau_ma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Số serial') ?></th>
                    <td><?= h($maytinh->so_serial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($maytinh->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngày mua') ?></th>
                    <td><?= h($maytinh->ngay_mua) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngày hết hạn bảo hành') ?></th>
                    <td><?= h($maytinh->ngay_het_han_bao_hanh) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mô tả') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($maytinh->mo_ta)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
