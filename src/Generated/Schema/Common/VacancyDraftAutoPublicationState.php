<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftAutoPublicationState.
 */
class VacancyDraftAutoPublicationState extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bill_uid' => 'bill_uid', 'cart_id' => 'cart_id'];

    protected const REQUIRED_FIELDS = ['bill_uid', 'cart_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Номер счета */
    public string $bill_uid;

    /** @var string Идентификатор заказа */
    public string $cart_id;
}
