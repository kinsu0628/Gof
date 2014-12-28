<?php
/**
 * AbstractClass�N���X�ɑ�������
 */
abstract class AbstractDisplay
{
    /**
     * �\������f�[�^
     */
    private $data;

    /**
     * �R���X�g���N�^
     * @param mixed �\������f�[�^
     */
    public function __construct($data)
    {
        if (!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    /**
     * template method�ɑ�������
     */
    public function display()
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * �f�[�^���擾����
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * �w�b�_��\������
     * �T�u�N���X�Ɏ�����C���钊�ۃ��\�b�h
     */
    protected abstract function displayHeader();

    /**
     * �{�f�B�i�N���C�A���g����n���ꂽ���e�j��\������
     * �T�u�N���X�Ɏ�����C���钊�ۃ��\�b�h
     */
    protected abstract function displayBody();

    /**
     * �t�b�^��\������
     * �T�u�N���X�Ɏ�����C���钊�ۃ��\�b�h
     */
    protected abstract function displayFooter();

}