<?php
require_once 'DisplaySourceFileImpl.class.php';

/**
 * DisplaySourceFileImpl�N���X���C���X�^���X������B
 * ���e��\������t�@�C���́A�uShowFile.class.php�v
 */
$show_file = new DisplaySourceFileImpl('./ShowFile.class.php');

/**
 * �v���[���e�L�X�g�ƃn�C���C�g�����t�@�C�����e�����ꂼ��
 * �\������
 */
$show_file->display();