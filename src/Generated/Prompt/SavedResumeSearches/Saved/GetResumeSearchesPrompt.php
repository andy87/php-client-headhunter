<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\SavedResumeSearches\Saved;

use Andy87\ClientsHh\Generated\Prompt\GetSavedResumeSearchesPrompt as BaseGetSavedResumeSearchesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /saved_searches/resumes.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-saved-resume-searches
 *
 * @property float|null $page Номер страницы (считается от 0, по умолчанию - 0)
 * @property float|null $per_page Количество элементов (по умолчанию - 5, максимальное значение - 10)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetResumeSearchesPrompt extends BaseGetSavedResumeSearchesPrompt
{
}
