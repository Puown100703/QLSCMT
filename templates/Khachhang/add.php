<?php
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Html->link(__('Danh sách Khách hàng'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="khachhang form content">
            <?= $this->Form->create($khachhang) ?>
            <fieldset>
                <legend><?= __('Thêm mới') ?></legend>
                <?php
                    echo $this->Form->control('ten_KH', ['label' => __('Tên Khách hàng')]);
                    echo $this->Form->control('email', ['label' => __('Email')]);
                    echo $this->Form->control('so_dt', ['label' => __('Số điện thoại')]);
                    echo $this->Form->control('dia_chi', ['label' => __('Địa chỉ')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cập nhật thông tin')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
