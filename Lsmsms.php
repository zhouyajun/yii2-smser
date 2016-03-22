<?php
	
	namespace zyj\smser;

	use Yii;
	use yii\base\InvalidConfigException;
	/**
	 * 	云片短信平台
	 * 	
	 * 	@author zyj
	 */
	class Lsmsms extends Smser
	{
		/**
		 * 	请求地址
		 * 
		 * 	@var string
		 */
		public $url = 'http://sms-api.luosimao.com/v1/send.json';

		public $key = '';
		/**
		 * 发送短信
		 * 
		 * 	@var string $mobile  例如"13861248964;150519888";
		 *	@var string $content 
		 *	@return boolean
		 */
		public 	function sendSms($mobile,$content)
		{
			$data = [
				'mobile'=>$mobile,
				'message'=>$content
			];
			$user_pwd = 'api-key'.$this->key;
			$res = $this->LsmCurl($user_pwd,$data);
			var_dump(json_decode($res));
			exit;
		}


		public function LsmCurl($user_pwd,$data){

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->url);

			curl_setopt($ch, CURLOPT_HTTP_VERSION  , CURL_HTTP_VERSION_1_0 );
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_HEADER, FALSE);

			curl_setopt($ch, CURLOPT_HTTPAUTH , CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD  , $user_pwd);

			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

			$res = curl_exec( $ch );
			curl_close( $ch );
			return $res;
		}
		
	}
?>