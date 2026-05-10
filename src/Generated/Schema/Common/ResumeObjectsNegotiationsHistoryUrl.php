<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsNegotiationsHistoryUrl.
 */
class ResumeObjectsNegotiationsHistoryUrl extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['url' => 'url'];

    protected const REQUIRED_FIELDS = ['url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string URL, на который необходимо сделать GET-запрос, чтобы получить [подробную историю откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-resume-negotiations-history) по данному резюме */
    public string $url;
}
