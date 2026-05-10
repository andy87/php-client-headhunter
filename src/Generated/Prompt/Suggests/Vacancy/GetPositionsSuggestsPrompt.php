<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Suggests\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\GetVacancyPositionsSuggestsPrompt as BaseGetVacancyPositionsSuggestsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /suggests/vacancy_positions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-positions-suggests
 *
 * @property string $text Текст для поиска должности в вакансии. Искомый текст должен быть длиной два или более символа и не более 3 000 символов
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetPositionsSuggestsPrompt extends BaseGetVacancyPositionsSuggestsPrompt
{
}
