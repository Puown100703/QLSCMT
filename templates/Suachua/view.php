<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suachua $suachua
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $suachua->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $suachua->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $suachua->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách sửa chữa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suachua view content">
            <h3><?= h($suachua->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($suachua->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Máy tính') ?></th>
                    <td><?= $suachua->id_mayTinh === null ? '' : $this->Number->format($suachua->id_mayTinh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chi phí') ?></th>
                    <td><?= $suachua->chi_phi === null ? '' : $this->Number->format($suachua->chi_phi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Nhân viên') ?></th>
                    <td><?= $suachua->id_nhanVien === null ? '' : $this->Number->format($suachua->id_nhanVien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngày bắt đầu') ?></th>
                    <td><?= h($suachua->ngay_bat_dau) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngày kết thúc') ?></th>
                    <td><?= h($suachua->ngay_ket_thuc) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
