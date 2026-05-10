<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\VacancyDrafts\Vacancy;

use and_y87\ClientsHh\Generated\Prompt\DeleteVacancyDraftPrompt as BaseDeleteVacancyDraftPrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /vacancies/drafts/{draft_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/delete-vacancy-draft
 *
 * @property string $draft_id Идентификатор черновика
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class DeleteDraftPrompt extends BaseDeleteVacancyDraftPrompt
{
}
