<?php
require_once 'DisplaySourceFile.class.php';
require_once 'ShowFile.class.php';

/**
 * DisplaySourceFile�����������N���X
 */
class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile
{
    /**
     * �R���X�g���N�^
     */
    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    /**
     * �w�肳�ꂽ�\�[�X�t�@�C�����n�C���C�g�\������
     */
    public function display()
    {
        parent::showHighlight();
    }
}