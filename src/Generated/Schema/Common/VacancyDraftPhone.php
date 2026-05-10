<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftPhone.
 */
class VacancyDraftPhone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['city' => 'city', 'comment' => 'comment', 'country' => 'country', 'number' => 'number'];

    protected const REQUIRED_FIELDS = ['country', 'city', 'number'];

    protected const NULLABLE_FIELDS = ['comment'];

    protected const CASTS = [];

    /** @var string Код города */
    public string $city;

    /** @var string|null Комментарий (удобное время для звонка по этому номеру) */
    public ?string $comment = null;

    /** @var string Код страны */
    public string $country;

    /** @var string Абонентская часть телефонного номера */
    public string $number;
}
