<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\VacancyManagement\Vacancy;

use and_y87\ClientsHh\Generated\Prompt\EditVacancyPrompt as BaseEditVacancyPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /vacancies/{vacancy_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/edit-vacancy
 *
 * @property string $vacancy_id Идентификатор вакансии
 * @property bool|null $ignore_duplicates Игнорировать появление дубликата после редактирования вакансии. По умолчанию — `false`
 * @property bool|null $ignore_replacement_warning При значительном изменении вакансии ошибка будет проигнорирована, что может привести к риску блокировки. По умолчанию — `true`
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyEdit $body Request body
 */
class EditPrompt extends BaseEditVacancyPrompt
{
}
