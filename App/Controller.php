<?php 
	class Controller{
		//bien $view de luu noi dung cua view trong MVC
		public $view = NULL;
		//bien $layout de luu noi dung cua file template
		public $layout = NULL;
		public function renderHTML($fileName,$data = NULL){
			if($data != NULL)
				extract($data);
			if(file_exists($fileName)){
				//doc noi dung file gan vao mot bien
				ob_start();
				include $fileName;
				$content = ob_get_contents();
				ob_get_clean();
				//---
				//gan noi dung vao bien $view cua class
				$this->view = $content;
			}
			//neu co du lieu o bien $layout thi include file
			if($this->layout != NULL)
				include $this->layout;
			else
				echo $this->view;
		}
		//ham xac thuc dang nhap
		public function authentication(){
			if(isset($_SESSION["email"]) == NULL)
				header("location:index.php?area=Backend&controller=Login");
		}
		public function removeUnicode($str){
			 $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
       $str = str_replace(",", "", $str);
       $str = str_replace(".", "", $str);       
       $str = str_replace(" ", "-", $str);
       $str = str_replace("?", "", $str);
       $str = strtolower($str);
		return $str;
		}
	}
	
 ?>