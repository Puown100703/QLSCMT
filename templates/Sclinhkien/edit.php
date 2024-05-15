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
            <?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $sclinhkien->id],
                ['confirm' => __('Bạn có muốn xóa {0} không?', $sclinhkien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Danh sách Sửa chữa_Linh kiện'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sclinhkien form content">
            <?= $this->Form->create($sclinhkien) ?>
            <fieldset>
                <legend><?= __('Sửa') ?></legend>
                <?php
                    echo $this->Form->control('id_sua_chua', ['label' => __('Id sửa chữa')]);
                    echo $this->Form->control('id_linh_kien', ['label' => __('Id linh kiện')]);
                    echo $this->Form->control('so_luong', ['label' => __('Số lượng')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cập nhật thành công')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
