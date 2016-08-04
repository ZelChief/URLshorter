<?php

class Shorter {

	private function ConvertBase($Input,$Base=10) {
		$Result=array();
		for($i=0;$i<1||gmp_sign($Input)==1;$i++)
		{
			$Result[]=gmp_intval(gmp_mod($Input,$Base));
			$Input=gmp_div_q($Input,$Base);
		}
		$Result=array_reverse($Result);
		return($Result);
	}

	private function ValidProtocolForLink($thelink){
		$protocol = parse_url($thelink,PHP_URL_SCHEME);
		if($protocol == null){
			$thelink = "http://".$thelink;
		}
		return $thelink;
	}

	public function GetDomen($thelink){
		$domen = parse_url($thelink, PHP_URL_HOST);
		$domen1 = 'bmstu.net';
		$domen2 = 'bmstu.wiki';
		$domen3 = 'bmstu.online';
		$domen4 = 'bmstu.co';
		$domen5 = 'bmstu.ru';
		$domen6 = 'bmstu.cloud';
		if(strpos($domen,$domen1) !== false) {
			return $domen1;
		} else if(strpos($domen,$domen2) !== false) {
			return $domen2;
		} else if(strpos($domen,$domen3) !== false) {
			return $domen3;
		} else if(strpos($domen,$domen4) !== false) {
			return $domen4;
		} else if(strpos($domen,$domen5) !== false) {
			return $domen5;
		} else if(strpos($domen,$domen6) !== false) {
			return $domen6;
		} else {
			return 'others';
		}

	}

	private function ValidLink($thelink){
		$valid = false;
		if(preg_match('/^(http:\/\/|https:\/\/)?[0-9a-zA-Zà-ÿÀ-ß¸¨]{1,3}+[.][0-9a-zA-Zà-ÿÀ-ß¸¨]+[.][0-9a-zA-Zà-ÿÀ-ß¸¨]{2,6}+$/',$thelink)){
			$valid = true;
		}
		return $valid;

	}


	public function Short($thelink){
		try {
			$linkhash = md5($thelink);
			$code = "";
			$thelink = $this->ValidProtocolForLink($thelink);
			$domen = $this->GetDomen($thelink);
			if (filter_var($thelink, FILTER_VALIDATE_URL) and $this->ValidLink($thelink)) {

				$link = mysqli_connect(Config::Get('db.params.host'), Config::Get('db.params.user'), Config::Get('db.params.pass'), Config::Get('db.params.dbname'));

				if (!$link) {
					echo('Error: Cannot connect to the DB');
				} else {
					$alreadyExists = mysqli_fetch_all(mysqli_query($link, "SELECT EXISTS(SELECT 1 from links WHERE linkhash = '$linkhash')"))[0][0];
					if ($alreadyExists == "1") {
						$code = mysqli_fetch_all(mysqli_query($link, "SELECT code from links WHERE linkhash = '$linkhash'"))[0][0];
					} else {
						$maxnum = mysqli_fetch_all(mysqli_query($link, "SELECT MAX(id) from links"))[0][0];
						$Input = gmp_add($maxnum, '1');
						$Chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
						$Base = strlen($Chars);
						$Result = $this->ConvertBase($Input, $Base);
						for ($i = 0; $i < count($Result); $i++)
							$code .= $Chars{$Result[$i]};
						$id = gmp_strval($Input, 10);

						$stmt = mysqli_prepare($link, "INSERT INTO links (id, code, link, linkhash, domen) VALUES (?, ?, ?, ?, ?)");

						if ($stmt === false) {
							trigger_error('Statement failed! ' . htmlspecialchars(mysqli_error($link)), E_USER_ERROR);
						}

						$bind = mysqli_stmt_bind_param($stmt, "sssss", $id, $code, $thelink, $linkhash, $domen);

						if ($bind === false) {
							trigger_error('Bind param failed!', E_USER_ERROR);
						}

						$exec = mysqli_stmt_execute($stmt);

						if ($exec === false) {
							trigger_error('Statement execute failed! ' . htmlspecialchars(mysqli_stmt_error($stmt)), E_USER_ERROR);
						}

						mysqli_stmt_close($stmt);
						mysqli_close($link);
					}
				}
				$code = Config::Get('path.root.web') . '/' . $code;
			}
			else $code = "errorcodeBadLink";
			return $code;
		} catch(Exception $e) {

		}
	}


}
?>
