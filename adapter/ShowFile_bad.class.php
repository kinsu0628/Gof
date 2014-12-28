<?php
require_once 'DisplaySourceFile.class.php';

/**
 * �w�肳�ꂽ�t�@�C���̓��e��\������N���X�ł�
 */
class ShowFile implements DisplaySourceFile
{
    /**
     * ���e��\������t�@�C����
     *
     * @access private
     */
    private $filename;

    /**
     * �R���X�g���N�^
     *
     * @param string �t�@�C����
     * @throws Exception
     */
    public function __construct($filename)
    {
        if (!is_readable($filename)) {
            throw new Exception('file "' . $filename . '" is not readable !');
        }
        $this->filename = $filename;
    }

    /**
     * �v���[���e�L�X�g�Ƃ��ĕ\�����܂�
     */
    public function showPlain()
    {
        echo '<pre>';
        echo htmlspecialchars(file_get_contents($this->filename),
                             ENT_QUOTES, mb_internal_encoding());
        echo '</pre>';
    }

    /**
     * �L�[���[�h���n�C���C�g���ĕ\�����܂�
     */
    public function showHighlight()
    {
        highlight_file($this->filename);
    }

    /**
     * �L�[���[�h���n�C���C�g���ĕ\�����܂�
     * DisplaySourceFile�C���^�[�t�F�[�X�̎���
     */
    public function display()
    {
        highlight_file($this->filename);
    }
}