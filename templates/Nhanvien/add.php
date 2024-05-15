<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nhanvien $nhanvien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Danh sách Nhân viên'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="nhanvien form content">
            <?= $this->Form->create($nhanvien) ?>
            <fieldset>
                <legend><?= __('Thêm mới Nhân viên') ?></legend>
                <?php
                    echo $this->Form->control('ten_nv', ['label' => __('Tên Nhân viên')]);
                    echo $this->Form->control('email', ['label' => __('Email')]);
                    echo $this->Form->control('so_dt', ['label' => __('Số điện thoại')]);
                    echo $this->Form->control('dia_chi', ['label' => __('Địa chỉ')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Lưu')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
