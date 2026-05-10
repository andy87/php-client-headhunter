<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Подсказки\Areas;

use Andy87\ClientsHh\Generated\Prompt\GetAreasSuggestsPrompt as BaseGetAreasSuggestsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /suggests/areas.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas-suggests
 *
 * @property string $text Текст для поиска региона. Искомый текст должен быть длиной два или более символа и не более 3 000 символов
 * @property string|null $area_id Идентификатор региона из [справочника](#tag/Obshie-spravochniki/operation/get-areas). Сужает подсказки поддеревом переданного идентификатора региона
 * @property bool|null $include_parent Включать ли в ответ регион, переданный в параметре `area_id`, если он подходит по искомому тексту
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetSuggestsPrompt extends BaseGetAreasSuggestsPrompt
{
}
