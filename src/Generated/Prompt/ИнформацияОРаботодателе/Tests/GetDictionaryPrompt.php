<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ИнформацияОРаботодателе\Tests;

use Andy87\ClientsHh\Generated\Prompt\GetTestsDictionaryPrompt as BaseGetTestsDictionaryPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/tests.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-tests-dictionary
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetDictionaryPrompt extends BaseGetTestsDictionaryPrompt
{
}
