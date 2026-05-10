<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyAddress.
 */
class VacancyAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'show_metro_only' => 'show_metro_only'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['id', 'show_metro_only'];

    protected const CASTS = [];

    /** @var string|null Адрес из [списка доступных адресов работодателя](#tag/Adresa-rabotodatelya/operation/get-employer-addresses) */
    public ?string $id = null;

    /** @var bool|null Показывать только метро для указанного адреса */
    public ?bool $show_metro_only = null;
}
