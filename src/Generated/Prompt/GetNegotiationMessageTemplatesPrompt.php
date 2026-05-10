<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /message_templates/{template}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-message-templates
 */
class GetNegotiationMessageTemplatesPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/message_templates/{template}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['topic_id' => ['style' => 'form', 'explode' => true], 'vacancy_id' => ['style' => 'form', 'explode' => true], 'resume_id' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['template' => 'template', 'topic_id' => 'topic_id', 'vacancy_id' => 'vacancy_id', 'resume_id' => 'resume_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['template'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['template'];

    protected const QUERY_FIELDS = ['topic_id', 'vacancy_id', 'resume_id', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Название шаблона. Возможные варианты:

* `invite` — текст при приглашении соискателя на вакансию;
* `invite_after_response` — текст при [приглашении после отклика со стороны соискателя](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state);
* `discard_after_response` — текст при [отказе после отклика](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state);
* `discard_after_interview` — текст при [отказе после приглашения соискателя на интервью](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state).

Список шаблонов может быть расширен
 */
    public string $template;

    /** @var string|null Идентификатор существующего отклика/приглашения. Не может передаваться одновременно с другими параметрами */
    public ?string $topic_id = null;

    /** @var string|null Идентификатор вакансии для приглашения. Передается только вместе с параметром `resume_id` */
    public ?string $vacancy_id = null;

    /** @var string|null Идентификатор резюме для приглашения на вакансию. Передается только вместе с параметром `vacancy_id` */
    public ?string $resume_id = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;
}
