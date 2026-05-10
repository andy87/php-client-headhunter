<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\EmployerNegotiations\Negotiations;

use Andy87\ClientsHh\Generated\Prompt\PostNegotiationsTopicsReadPrompt as BasePostNegotiationsTopicsReadPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /negotiations/read.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/post-negotiations-topics-read
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string $topic_id Идентификаторы откликов. Переданные в параметре отклики должны принадлежать одной вакансии
 */
class PostTopicsReadPrompt extends BasePostNegotiationsTopicsReadPrompt
{
}
