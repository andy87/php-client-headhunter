<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsObjectsSubCollections.
 */
class NegotiationsObjectsSubCollections extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'root_collection' => 'root_collection', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'root_collection', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор коллекции подстатуса */
    public string $id;

    /** @var string Название коллекции подстатуса */
    public string $name;

    /** @var bool Является ли коллекция подстатуса обязательной. В коллекции всегда присутствует только одна обязательная коллекция подстатуса */
    public bool $root_collection;

    /** @var string URL, [GET-запрос на который](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) возвращает список откликов/приглашений коллекции подстатуса
 */
    public string $url;
}
