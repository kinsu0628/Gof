<?php
require_once 'AbstractDisplay.class.php';

/**
 * ConcreteClass�N���X�ɑ�������
 */
class TableDisplay extends AbstractDisplay
{

    /**
     * �w�b�_��\������
     */
    protected function displayHeader()
    {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    /**
     * �{�f�B�i�N���C�A���g����n���ꂽ���e�j��\������
     */
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    /**
     * �t�b�^��\������
     */
    protected function displayFooter()
    {
        echo '</table>';
    }
}