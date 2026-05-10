<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ИнформацияОРаботодателе\Employer;

use Andy87\ClientsHh\Generated\Prompt\GetEmployerDepartmentsPrompt as BaseGetEmployerDepartmentsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/departments.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-departments
 *
 * @property string $employer_id Идентификатор работодателя, который можно получить в [списке работодателей](#tag/Rabotodatel/operation/search-employer)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetDepartmentsPrompt extends BaseGetEmployerDepartmentsPrompt
{
}
