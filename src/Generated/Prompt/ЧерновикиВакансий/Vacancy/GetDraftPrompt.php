<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ЧерновикиВакансий\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\GetVacancyDraftPrompt as BaseGetVacancyDraftPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies/drafts/{draft_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-draft
 *
 * @property string $draft_id Идентификатор черновика
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetDraftPrompt extends BaseGetVacancyDraftPrompt
{
}
