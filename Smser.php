<?php
	
	namespace zyj\smser;

	use Yii;
	/**
	 * 	短信扩展基类
	 * 
	 * 	@author zyj <617242499@qq.com>
	 */
	abstract class Smser extends \yii\base\Object
	{	
		/**
		 *  请求地址
		 * 
		 * 	@var string 
		 */

		public $url;

		/**
		 * 	用户名
		 * 	
		 *  @var string
		 */
		public $username;

		/**
		 *  密码
		 * 
		 * 	@var string
		 */
		protected $password;

		/**
		 * 	状态码
		 * 	
		 * 	@var string
		 */
		protected $state;

		/**
		 * 	状态信息
		 * 
		 * 	@var string
		 */
		protected $message;

		/**
		 * 	发送短信
		 * 
		 * 	@param  string $mobile 
		 */

		/**
		 *  curl post 请求
		 *	
		 *	@param array  $data
		 *	@retrun result
		 */
		protected  function postRequire($data){

			$ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL, $this->url);
	        curl_setopt($ch, CURLOPT_POST, true);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
	        
	        $result = curl_exec($ch);
	        curl_close($ch);
	        return $result;
		}

		/**
		 * 	curl get 请求
		 * 
		 * 	$return result
		 */
		protected function getRequire(){

			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$this->url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_HEADER, 0);

			$result = culr_exec($ch);

			curl_close($ch);

			return $result;
		}

		/**
		 * 	设置密码
		 * 
		 * 
		 */
		protected function setPassword($password){
			$this->password = $password;
		}

	}
?>