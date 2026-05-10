<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\СправочникиБанкаДанныхЗаработныхПлат\Salary;

use Andy87\ClientsHh\Generated\Prompt\GetSalarySalaryAreasPrompt as BaseGetSalarySalaryAreasPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /salary_statistics/dictionaries/salary_areas.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-salary-salary-areas
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetSalaryAreasPrompt extends BaseGetSalarySalaryAreasPrompt
{
}
