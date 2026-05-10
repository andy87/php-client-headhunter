<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesEmployerRating.
 */
class VacanciesEmployerRating extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reviews_count' => 'reviews_count', 'total_rating' => 'total_rating'];

    protected const REQUIRED_FIELDS = ['total_rating', 'reviews_count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var mixed Количество отзывов */
    public mixed $reviews_count;

    /** @var string Сводный рейтинг компании */
    public string $total_rating;
}
