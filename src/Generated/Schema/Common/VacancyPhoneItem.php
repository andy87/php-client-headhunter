<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyPhoneItem.
 */
class VacancyPhoneItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['city' => 'city', 'comment' => 'comment', 'country' => 'country', 'formatted' => 'formatted', 'number' => 'number'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['comment'];

    protected const CASTS = [];

    /** @var string|null Код города */
    public ?string $city = null;

    /** @var string|null Комментарий (удобное время для звонка по этому номеру) */
    public ?string $comment = null;

    /** @var string|null Код страны */
    public ?string $country = null;

    /** @var string|null Телефонный номер */
    public ?string $formatted = null;

    /** @var string|null Телефон */
    public ?string $number = null;
}
