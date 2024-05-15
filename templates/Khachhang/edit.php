<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khachhang $khachhang
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lựa chọn') ?></h4>
            <?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $khachhang->id],
                ['confirm' => __('Bạn có muốn xóa {0}?', $khachhang->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Danh sách Khách hàng'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="khachhang form content">
            <?= $this->Form->create($khachhang) ?>
            <fieldset>
                <legend><?= __('Sửa') ?></legend>
                <?php
                    echo $this->Form->control('ten_KH', ['label' => __('Tên Khách hàng')]);
                    echo $this->Form->control('email', ['label' => __('Email')]);
                    echo $this->Form->control('so_dt', ['label' => __('Số đt')]);
                    echo $this->Form->control('dia_chi', ['label' => __('Địa chỉ')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cập nhật thông tin')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
