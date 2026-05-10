<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\СохраненныеПоискиРезюме\Move;

use Andy87\ClientsHh\Generated\Prompt\MoveSavedResumeSearchPrompt as BaseMoveSavedResumeSearchPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /saved_searches/resumes/{saved_search_id}/managers/{manager_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/move-saved-resume-search
 *
 * @property string $saved_search_id Идентификатор из [списка сохраненных поисков](#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-searches)
 * @property string $manager_id Идентификатор менеджера, которому надо передать автопоиск ([список менеджеров компании](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers))
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class SavedResumeSearchPrompt extends BaseMoveSavedResumeSearchPrompt
{
}
