<?php

	namespace app;
	class QueryPhone{
		const TAOBAO_API = 'https://tcc.taobao.com/cc/json/mobile_tel_segment.htm';
		public static function query($phone){
			if(self::verifyPhone($phone)){
				
			}
		}
		//У���ֻ�����Ϸ���
		public static function verifyPhone($phone = null){
			$ret = false;
			if($phone){
				if(preg_match('/^1[34578]{1}\d{9}/',$phone)){
					$ret = true;
				}
				
			}
			return $ret;
		}
		
	}