<?php
/*
 * @u_id - Уникальный 1С идентефикатор
 * @login - Логин
 * @email - Почта
 * @name - Имя
 * @surname - Фамилия
 * @secondname - Отчество
 * @branch - Филиал
 * @direction - Направление/Служба
 * @department - Отдел
 * @position - Должность
 * @dob - Дата рождения
 * @date_hire - Дата приема на работу
 * @phone_in - Номер внутренний
 * @phone_mb - Номер мобильный Беларусь
 * @phone_mr - Номер мобильный Россия
 * @skype - Логин скайпа
 * @photo - Фотография
 * 
 */
class ApiController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
}
