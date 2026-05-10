<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /applicant_comments/{applicant_id}/{comment_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/update-applicant-comment
 */
class UpdateApplicantCommentPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/applicant_comments/{applicant_id}/{comment_id}';

    protected const CONTENT_TYPE = 'application/x-www-form-urlencoded';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['applicant_id' => 'applicant_id', 'comment_id' => 'comment_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'text' => 'text', 'access_type' => 'access_type'];

    protected const REQUIRED_FIELDS = ['applicant_id', 'comment_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['applicant_id', 'comment_id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['text', 'access_type'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор соискателя, который можно узнать из поля `owner` [в резюме](#tag/Prosmotr-rezyume/operation/get-resume) */
    public string $applicant_id;

    /** @var string Идентификатор комментария, который можно узнать в [списке комментариев](#tag/Kommentarii-k-soiskatelyu/operation/get-applicant-comments-list) */
    public string $comment_id;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var string|null Текст комментария */
    public ?string $text = null;

    /** @var string|null Тип доступа. Доступные значения перечислены [в справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `applicant_comment_access_type` */
    public ?string $access_type = null;
}
