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
 * Обработка главной страницы, т.е. УРЛа вида /index/
 *
 * @package actions
 * @since 1.0
 */
class ActionShort extends Action {

	/**
	 * Инициализация
	 *
	 */
	public function Init() {
		/**
		 * Подсчитываем новые топики
		 */
		if (!$this->User_IsAuthorization()) {
			return Router::Action('error');
		}
	}
	/**
	 * Регистрация евентов
	 *
	 */
	protected function RegisterEvent() {
		$this->AddEventPreg('/^(page([1-9]\d{0,5}))?$/i','EventIndex');
	}


	/**********************************************************************************
	 ************************ РЕАЛИЗАЦИЯ ЭКШЕНА ***************************************
	 **********************************************************************************
	 */
	/**
	 * Вывод интересных на главную
	 *
	 */
	protected function EventIndex() {
		if(getRequest('submit_short')){
			$thelink = idn_to_ascii($_POST['link_short']);
			$shorter = new Shorter();
			$code = $shorter->Short($thelink);
			if($code != "errorcodeBadLink") {
				$this->Viewer_Assign('iHrefShort', $code);
			} else {
				$this->Viewer_Assign('iHrefShort', "Неправильная ссылка");
			}
		}

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
