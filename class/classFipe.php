<?php

	class classFipe{


		private $url;

		public function setUrl($url)
		{

			$this->url=file_get_contents($url);
		}

		public function getUrl()
		{

			return json_encode($this->url);
		}

		public function decodeUrl()

		{
			return json_decode($this->url, true);
		}


	}

?>
