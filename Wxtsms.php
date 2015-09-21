<?php
	
	namespace zyj\smser;

	use Yii;
	use yii\base\InvalidConfigException;
	/**
	 * 	网信通短信平台
	 * 	
	 * 	@author zyj
	 */
	class Wxtsms extends Smser
	{
		/**
		 * 	请求地址
		 * 
		 * 	@var string
		 */
		public $url = 'http://www.js10088.com:18001';
		// http://www.js10088.com:18001/?Action=SendSms&UserName=用户名&Password=密码(32位MD5加密)&Mobile=手机号1;手机号2&Message=短信内容

		/**
		 * 发送短信
		 * 
		 * 	@var string $mobile  例如"13861248964;150519888";
		 *	@var string $content 
		 */
		public 	function sendSms($mobile,$content)
		{
			$data = [
				'Action'=>'SendSms',
				'Username'=>$this->username,
				'Password'=>$this->password,
				'Mobile'=>$mobile,
				'Message'=>urlencode($content)
			];
			$result = $this->postRequire($data);

			var_dump($result);
		}
	}
?>