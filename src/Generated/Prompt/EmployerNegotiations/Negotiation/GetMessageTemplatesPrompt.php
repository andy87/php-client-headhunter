<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerNegotiations\Negotiation;

use and_y87\ClientsHh\Generated\Prompt\GetNegotiationMessageTemplatesPrompt as BaseGetNegotiationMessageTemplatesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /message_templates/{template}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-message-templates
 *
 * @property string $template Название шаблона. Возможные варианты: * `invite` — текст при приглашении соискателя на вакансию; * `invite_after_response` — текст при [приглашении после отклика со стороны соискателя](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state); * `discard_after_response` — текст при [отказе после отклика](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state); * `discard_after_interview` — текст при [отказе после приглашения соискателя на интервью](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state). Список шаблонов может быть расширен
 * @property string|null $topic_id Идентификатор существующего отклика/приглашения. Не может передаваться одновременно с другими параметрами
 * @property string|null $vacancy_id Идентификатор вакансии для приглашения. Передается только вместе с параметром `resume_id`
 * @property string|null $resume_id Идентификатор резюме для приглашения на вакансию. Передается только вместе с параметром `vacancy_id`
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetMessageTemplatesPrompt extends BaseGetNegotiationMessageTemplatesPrompt
{
}
