<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\SavedResumeSearches\Saved;

use and_y87\ClientsHh\Generated\Prompt\DeleteSavedResumeSearchPrompt as BaseDeleteSavedResumeSearchPrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /saved_searches/resumes/{id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/delete-saved-resume-search
 *
 * @property string $id Идентификатор сохраненного поиска
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class DeleteResumeSearchPrompt extends BaseDeleteSavedResumeSearchPrompt
{
}
