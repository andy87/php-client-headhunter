<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\VacancyDrafts\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\GetVacancyDraftListPrompt as BaseGetVacancyDraftListPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies/drafts.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-draft-list
 *
 * @property float|null $page Номер страницы (считается от 0, по умолчанию - 0)
 * @property float|null $per_page Количество элементов (по умолчанию - 20, максимальное значение - 50)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetDraftListPrompt extends BaseGetVacancyDraftListPrompt
{
}
