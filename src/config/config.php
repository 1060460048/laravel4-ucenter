<?php
return array(
	'url'		=> '/api/ucapi', // ��վUCenter�������ݵ�ַ
	'api'		=> 'http://localhost/ucenter', // UCenter �� URL ��ַ, �ڵ���ͷ��ʱ�����˳���
	'connect'	=> 'mysql', // ���� UCenter �ķ�ʽ: mysql/NULL, Ĭ��Ϊ��ʱΪ fscoketopen()
	'dbhost'	=> 'localhost', // UCenter ���ݿ�����
	'dbuser'	=> 'root', // UCenter ���ݿ��û���
	'dbpw'		=> 'root', // UCenter ���ݿ�����
	'dbname'	=> 'ucenter', // UCenter ���ݿ�����
	'dbcharset'	=> 'utf8',// UCenter ���ݿ��ַ���
	'dbtablepre'=> 'uc_', // UCenter ���ݿ��ǰ׺
	'key'		=> '6bc3bbKaoWnVrb26juVvk4uq4c2a5SNQvzv70Zs', // �� UCenter ��ͨ����Կ, Ҫ�� UCenter ����һ��
	'charset'	=> 'utf-8', // UCenter ���ַ���
	'ip'		=> '127.0.0.1', // UCenter �� IP, �� UC_CONNECT Ϊ�� mysql ��ʽʱ, ���ҵ�ǰӦ�÷�������������������ʱ, �����ô�ֵ
	'appid'		=> 5, //��ǰӦ�õ� ID
	'ppp'		=> 20, //��ǰӦ�õ� ID
);
?>