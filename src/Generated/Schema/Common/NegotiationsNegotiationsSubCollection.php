<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsSubCollection.
 */
class NegotiationsNegotiationsSubCollection extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'root_collection' => 'root_collection', 'url' => 'url', 'counters' => 'counters', 'order_types' => 'order_types'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'root_collection', 'url', 'order_types'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['counters' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsEmployerCounters::class, 'order_types' => [\and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsOrderTypes::class]];

    /** @var string Идентификатор коллекции подстатуса */
    public string $id;

    /** @var string Название коллекции подстатуса */
    public string $name;

    /** @var bool Является ли коллекция подстатуса обязательной. В коллекции всегда присутствует только одна обязательная коллекция подстатуса */
    public bool $root_collection;

    /** @var string URL, [GET-запрос на который](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) возвращает список откликов/приглашений коллекции подстатуса
 */
    public string $url;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsEmployerCounters|null Schema field counters */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsEmployerCounters $counters = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsOrderTypes> Schema field order_types */
    public array $order_types;
}
