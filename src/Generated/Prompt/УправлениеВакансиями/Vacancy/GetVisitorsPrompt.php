<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\УправлениеВакансиями\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\GetVacancyVisitorsPrompt as BaseGetVacancyVisitorsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies/{vacancy_id}/visitors.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-visitors
 *
 * @property string $vacancy_id Идентификатор вакансии
 * @property float|null $page Номер страницы (считается от 0)
 * @property float|null $per_page Количество элементов
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetVisitorsPrompt extends BaseGetVacancyVisitorsPrompt
{
}
