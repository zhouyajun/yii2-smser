<?php
	
	namespace zyj\smser;

	use Yii;
	use yii\base\InvalidConfigException;
	/**
	 * 	云片短信平台
	 * 	
	 * 	@author zyj
	 */
	class Ypsms extends Smser
	{
		/**
		 * 	请求地址
		 * 
		 * 	@var string
		 */
		public $url = 'http://yunpian.com/v1/sms/send.json';


		/**
		 * 发送短信
		 * 
		 * 	@var string $mobile  例如"13861248964;150519888";
		 *	@var string $content 
		 *	@return boolean
		 */
		public 	function sendSms($mobile,$content)
		{
			
			return $this->state;
		}

		

	}
?>