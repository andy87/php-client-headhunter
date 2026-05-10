<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Справочники\Faculties;

use Andy87\ClientsHh\Generated\Prompt\GetFacultiesPrompt as BaseGetFacultiesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /educational_institutions/{id}/faculties.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-faculties
 *
 * @property string $id Идентификатор учебного заведения, который можно узнать из [подсказки](#tag/Podskazki/operation/get-educational-institutions-suggests)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetPrompt extends BaseGetFacultiesPrompt
{
}
