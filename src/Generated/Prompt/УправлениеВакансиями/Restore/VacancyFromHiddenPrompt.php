<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\УправлениеВакансиями\Restore;

use Andy87\ClientsHh\Generated\Prompt\RestoreVacancyFromHiddenPrompt as BaseRestoreVacancyFromHiddenPrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /employers/{employer_id}/vacancies/hidden/{vacancy_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/restore-vacancy-from-hidden
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string $vacancy_id Идентификатор вакансии
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class VacancyFromHiddenPrompt extends BaseRestoreVacancyFromHiddenPrompt
{
}
