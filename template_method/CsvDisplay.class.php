<?php

require_once 'AbstractDisplay.class.php';

/**
 * ConcreteClass�N���X�ɑ�������
 */
class CsvDisplay extends AbstractDisplay
{
    /**
     * �w�b�_��\������
     */
    protected function displayHeader()
    {
        echo '';
    }

    /**
     * �{�f�B�i�N���C�A���g����n���ꂽ���e�j��\������
     */
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo $value. ','  ;
        }
    }

    /**
     * �t�b�^��\������
     */
    protected function displayFooter()
    {
        echo '';
    }
}