<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ПодсказкиПоКлючевымСловам\Get;

use Andy87\ClientsHh\Generated\Prompt\GetResumeSearchKeywordsSuggestsPrompt as BaseGetResumeSearchKeywordsSuggestsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /suggests/resume_search_keyword.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume-search-keywords-suggests
 *
 * @property string $text Текст для поиска ключевого слова. Искомый текст должен быть длиной два или более символа и не более 3 000 символов
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class ResumeSearchKeywordsSuggestsPrompt extends BaseGetResumeSearchKeywordsSuggestsPrompt
{
}
