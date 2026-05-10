<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PublicPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancies
 */
class GetVacanciesPrompt extends PublicPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/vacancies';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['text' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['text' => 'text', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['text', 'per_page'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Search text. */
    public ?string $text = null;

    /** @var int|null Items per page. */
    public ?int $per_page = null;
}
