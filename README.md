# yii2-smser
yii2短信扩展
# usage
在组件中配置：
	'smser'=[
		'class'=>'zyj\smser\Wxtsms',
		'username'=>'username',
		'password'=>'password',
	]
使用 :
	Yii::$app->smser->sendSms($code,$message);
	
