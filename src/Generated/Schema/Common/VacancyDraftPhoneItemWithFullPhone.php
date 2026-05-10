<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftPhoneItemWithFullPhone.
 */
class VacancyDraftPhoneItemWithFullPhone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['comment' => 'comment', 'formatted' => 'formatted'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['comment'];

    protected const CASTS = [];

    /** @var string|null Комментарий (удобное время для звонка по этому номеру) */
    public ?string $comment = null;

    /** @var string|null Телефонный номер */
    public ?string $formatted = null;
}
