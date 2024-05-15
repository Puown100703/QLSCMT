<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sclinhkien $sclinhkien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $sclinhkien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $sclinhkien->id], ['confirm' => __('Bạn có muốn xóa {0} không?', $sclinhkien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách Sửa chữa_Linh kiện'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sclinhkien view content">
            <h3><?= h($sclinhkien->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sclinhkien->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Sửa chữa') ?></th>
                    <td><?= $sclinhkien->id_sua_chua === null ? '' : $this->Number->format($sclinhkien->id_sua_chua) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id linh kiện') ?></th>
                    <td><?= $sclinhkien->id_linh_kien === null ? '' : $this->Number->format($sclinhkien->id_linh_kien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Số lượng') ?></th>
                    <td><?= $sclinhkien->so_luong === null ? '' : $this->Number->format($sclinhkien->so_luong) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
