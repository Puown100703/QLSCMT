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
            <?= $this->Html->link(__('Danh sách sửa chữa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="suachua form content">
            <?= $this->Form->create($suachua) ?>
            <fieldset>
                <legend><?= __('Thêm mới') ?></legend>
                <?php
                    echo $this->Form->control('id_mayTinh', ['label' => __('Id Máy tính')]);
                    echo $this->Form->control('ngay_bat_dau', ['label' => __('Ngày bắt đầu')], ['empty' => true]);
                    echo $this->Form->control('ngay_ket_thuc', ['label' => __('Ngày kết thúc')], ['empty' => true]);
                    echo $this->Form->control('chi_phi', ['label' => __('Chi phí')]);
                    echo $this->Form->control('id_nhanVien', ['label' => __('Id Nhân viên')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Lưu')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
