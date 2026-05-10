<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\SavedResumeSearches\Saved;

use Andy87\ClientsHh\Generated\Prompt\UpdateSavedResumeSearchPrompt as BaseUpdateSavedResumeSearchPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /saved_searches/resumes/{id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/update-saved-resume-search
 *
 * @property string $id Идентификатор сохраненного поиска
 * @property string|null $name Новое имя сохраненного поиска
 * @property bool|null $subscription Статус подписки
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class UpdateResumeSearchPrompt extends BaseUpdateSavedResumeSearchPrompt
{
}
