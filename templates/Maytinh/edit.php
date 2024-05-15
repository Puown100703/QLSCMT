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
            <?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $maytinh->id],
                ['confirm' => __('Bạn có muốn xóa {0} không?', $maytinh->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Danh sách máy tính'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="maytinh form content">
            <?= $this->Form->create($maytinh) ?>
            <fieldset>
                <legend><?= __('Sửa') ?></legend>
                <?php
                    echo $this->Form->control('nhan_hang', ['label' => __('Nhãn hàng')]);
                    echo $this->Form->control('mau_ma', ['label' => __('Mẫu mã')]);
                    echo $this->Form->control('so_serial', ['label' => __('Số serial')]);
                    echo $this->Form->control('mo_ta', ['label' => __('Mô tả')]);
                    echo $this->Form->control('ngay_mua', ['label' => __('Ngày mua')], ['empty' => true]);
                    echo $this->Form->control('ngay_het_han_bao_hanh', ['label' => __('Ngày hết hạn bảo hành')], ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cập nhật thành công')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
