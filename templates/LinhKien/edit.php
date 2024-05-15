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
            <?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $linhKien->id],
                ['confirm' => __('Bạn có muốn xóa {0} không?', $linhKien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Danh sách linh kiện'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="linhKien form content">
            <?= $this->Form->create($linhKien) ?>
            <fieldset>
                <legend><?= __('Edit Linh Kien') ?></legend>
                <?php
                    echo $this->Form->control('ten_linh_kien', ['label' => __('Tên linh kiện')]);
                    echo $this->Form->control('mo_ta', ['label' => __('Mô tả')]);
                    echo $this->Form->control('so_luong', ['label' => __('Số lượng')]);
                    echo $this->Form->control('gia', ['label' => __('Giá')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cập nhật thành công')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
