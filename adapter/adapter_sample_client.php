<?php
require_once 'ShowFile.class.php';

/**
 * ShowFile�N���X���C���X�^���X������B
 * ���e��\������t�@�C���́A�uShowFile.class.php�v
 */
try {
    $show_file = new ShowFile('./ShowFile.class.php');
}
catch (Exception $e) {
    die($e->getMessage());
}

/**
 * �v���[���e�L�X�g�ƃn�C���C�g�����t�@�C�����e�����ꂼ��
 * �\������
 */
$show_file->showPlain();
echo '<hr>';
$show_file->showHighlight();