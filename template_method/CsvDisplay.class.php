<?php

require_once 'AbstractDisplay.class.php';

/**
 * ConcreteClassクラスに相当する
 */
class CsvDisplay extends AbstractDisplay
{
    /**
     * ヘッダを表示する
     */
    protected function displayHeader()
    {
        echo '';
    }

    /**
     * ボディ（クライアントから渡された内容）を表示する
     */
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo $value. ','  ;
        }
    }

    /**
     * フッタを表示する
     */
    protected function displayFooter()
    {
        echo '';
    }
}