<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsCollection.
 */
class NegotiationsNegotiationsCollection extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'hidden' => 'hidden', 'id' => 'id', 'name' => 'name', 'sub_collections' => 'sub_collections', 'url' => 'url', 'counters' => 'counters', 'order_types' => 'order_types'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'description', 'url', 'order_types'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['sub_collections' => [\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsSubCollection::class], 'counters' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsEmployerCounters::class, 'order_types' => [\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsOrderTypes::class]];

    /** @var string Описание коллекции */
    public string $description;

    /** @var bool|null Является ли данная коллекция скрытой */
    public ?bool $hidden = null;

    /** @var string Идентификатор коллекции */
    public string $id;

    /** @var string Название коллекции */
    public string $name;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsSubCollection>|null Коллекция подстатусов откликов/приглашений для данной вакансии */
    public ?array $sub_collections = null;

    /** @var string URL, [GET-запрос на который](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) возвращает список откликов/приглашений коллекции
 */
    public string $url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsEmployerCounters|null Schema field counters */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsEmployerCounters $counters = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsOrderTypes> Schema field order_types */
    public array $order_types;
}
