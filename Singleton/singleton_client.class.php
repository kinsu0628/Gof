<?php
require_once 'SingletonSample.class.php';

//$a = new SingletonSample(); 
/**
 * �C���X�^���X��2�擾����
 */
$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo '<hr>';

/**
 * 2�̃C���X�^���X������ID���ǂ������m�F����
 */
echo 'instance ID : ' . $instance1->getID() . '<br>';
echo '$instance1->getID() === $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<hr>';

/**
 * 2�̃C���X�^���X�����ꂩ�ǂ������m�F����
 */
echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

/**
 * �����ł��Ȃ����Ƃ��m�F����
 */
$instance1_clone = clone $instance1;
