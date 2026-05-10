<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesPreferredNegotiationsOrderRequest.
 */
class VacanciesPreferredNegotiationsOrderRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['order' => 'order'];

    protected const REQUIRED_FIELDS = ['order'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор типа сортировки. Возможные значения представлены в поле `order_types` [коллекции откликов и приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations). Не все типы сортировки из списка доступны для изменения */
    public string $order;
}
