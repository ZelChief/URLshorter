<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/
require_once("Shorter.class.php");
/**
 * Обработка главной страницы, т.е. УРЛа вида /api/
 *
 * @package actions
 * @since 1.0
 */
class ActionApi extends Action {
	/**
	 * Инициализация
	 *
	 */
	public function Init() {

	}
	/**
	 * Регистрация евентов
	 *
	 */
	protected function RegisterEvent() {
		$this->AddEventPreg('/^(page([1-9]\d{0,5}))?$/i','EventApi');
	}


	/**********************************************************************************
	 ************************ РЕАЛИЗАЦИЯ ЭКШЕНА ***************************************
	 **********************************************************************************
	 */


	protected function EventApi() {
		//method="" - метод api, key="" - ключ авторизации, data="" - передаваемые данные
		//
		$method = "";
		$key = "";
		$data = "";
		$shorter = new Shorter();
		$result = "";

		if(!empty($_REQUEST["method"])) {
			$method = $_REQUEST["method"];
		}
		if(!empty($_REQUEST["key"])) {
			$key = $_REQUEST["key"];
		} else {
			return Router::Action('error');
		}
		if(!empty($_REQUEST["data"])) {
			$data = $_REQUEST["data"];
		}
		if($key == Config::Get('server.api.key')){
			if($method == "short"){
				$result = $shorter->Short($data);
			}
		} else {
			return Router::Action('error');
		}
		echo $result;
		$this->SetTemplateAction('index');
	}
	/**
	 * При завершении экшена загружаем переменные в шаблон
	 *
	 */
	public function EventShutdown() {

	}
}
?>
