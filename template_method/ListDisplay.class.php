<?php
require_once 'AbstractDisplay.class.php';

/**
 * ConcreteClass�N���X�ɑ�������
 */
class ListDisplay extends AbstractDisplay
{
    /**
     * �w�b�_��\������
     */
    protected function displayHeader()
    {
        echo '<dl>';
    }

    /**
     * �{�f�B�i�N���C�A���g����n���ꂽ���e�j��\������
     */
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * �t�b�^��\������
     */
    protected function displayFooter()
    {
        echo '</dl>';
    }
}