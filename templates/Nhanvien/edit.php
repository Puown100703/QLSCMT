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
            <?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $nhanvien->id],
                ['confirm' => __('Bạn có muốn xóa {0} không?', $nhanvien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Danh sách Nhân viên'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="nhanvien form content">
            <?= $this->Form->create($nhanvien) ?>
            <fieldset>
                <legend><?= __('Sửa') ?></legend>
                <?php
                    echo $this->Form->control('ten_nv', ['label' => __('Tên Nhân viên')]);
                    echo $this->Form->control('email', ['label' => __('Email')]);
                    echo $this->Form->control('so_dt', ['label' => __('Số điện thoại')]);
                    echo $this->Form->control('dia_chi', ['label' => __('Địa chỉ')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cập nhật thành công')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
