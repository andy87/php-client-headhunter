<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\БанкДанныхОЗарплатах\Salary;

use Andy87\ClientsHh\Generated\Prompt\GetSalaryEvaluationPrompt as BaseGetSalaryEvaluationPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /salary_statistics/paid/salary_evaluation/{area_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-salary-evaluation
 *
 * @property string $area_id Код [региона](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-salary-areas), по которому будет построена выборка для формирования отчета
 * @property string|null $exclude_area Коды [регионов](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-salary-areas), которые будут исключены из выборки для формирования отчета. Параметр позволяет получить оценку на региональном рынке за исключением определенных городов или областей
 * @property string|null $employee_level Справочник [уровни компетенций](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-employee-levels), которые будут включены в выборку для формирования отчета
 * @property string|null $industry Справочник [Коды отраслей](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-industries), по которым будет построена выборка для формирования отчета
 * @property string|null $speciality Справочник [Коды профобластей и специализаций](#tag/Spravochniki-Banka-dannyh-zarabotnyh-plat/operation/get-salary-professional-areas), которые будут включены в выборку для формирования отчета
 * @property bool|null $extend_sources Использовать ли данные из резюме и вакансий, если по указанным параметрам не нашлось данных в банке зарплат. По умолчанию — `false`
 * @property string|null $position_name Наименование должности. Если не переданы параметры `speciality` или `employee_level`, сервис самостоятельно определит возможные специализации и уровень специалиста по указанной должности и отрасли, и построит отчет по ним
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetEvaluationPrompt extends BaseGetSalaryEvaluationPrompt
{
}
