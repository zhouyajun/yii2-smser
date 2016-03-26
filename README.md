# yii2-smser
	yii2短信扩展开
[![Latest Stable Version](https://poser.pugx.org/zyj/yii2-mysmser/v/stable)](https://packagist.org/packages/zyj/yii2-mysmser) [![Total Downloads](https://poser.pugx.org/zyj/yii2-mysmser/downloads)](https://packagist.org/packages/zyj/yii2-mysmser) [![Latest Unstable Version](https://poser.pugx.org/zyj/yii2-mysmser/v/unstable)](https://packagist.org/packages/zyj/yii2-mysmser) [![License](https://poser.pugx.org/zyj/yii2-mysmser/license)](https://packagist.org/packages/zyj/yii2-mysmser)
# usage
在组件中配置：
```php
	#网信通
	'smser'=>[
		'class'=>'zyj\smser\Wxtsms',
		'username'=>'username',
		'password'=>'password',
	]
	#云片
	'smser'=>[
		'class'=>'zyj\smser\Ypsms',
		'apikey'=>'your apikey',
	]
```
#install
	composer require zyj/yii2-mysmser	
