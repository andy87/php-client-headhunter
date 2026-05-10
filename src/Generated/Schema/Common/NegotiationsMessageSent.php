<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsMessageSent.
 */
class NegotiationsMessageSent extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['author' => 'author', 'created_at' => 'created_at', 'editable' => 'editable', 'id' => 'id', 'read' => 'read', 'state' => 'state', 'text' => 'text', 'viewed_by_me' => 'viewed_by_me', 'viewed_by_opponent' => 'viewed_by_opponent', 'address' => 'address'];

    protected const REQUIRED_FIELDS = ['id', 'viewed_by_me', 'viewed_by_opponent', 'editable', 'created_at', 'text', 'state', 'author', 'address'];

    protected const NULLABLE_FIELDS = ['text', 'address'];

    protected const CASTS = ['author' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsAuthor::class, 'state' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsAuthor Schema field author */
    public \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsAuthor $author;

    /** @var string Дата и время создания сообщения */
    public string $created_at;

    /** @var bool Можно ли редактировать текст сообщения */
    public bool $editable;

    /** @var string Идентификатор сообщения */
    public string $id;

    /** @var bool|null Можно ли прочитать сообщение */
    public ?bool $read = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Состояние сообщения */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $state;

    /** @var string|null Текст сообщения */
    public ?string $text;

    /** @var bool Прочитано ли сообщение смотрящим (для сообщений отправленных соискателем - всегда true) */
    public bool $viewed_by_me;

    /** @var bool Прочитано ли сообщение работодателем (для сообщений работодателя - true) */
    public bool $viewed_by_opponent;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressOutput|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressOutput $address;
}
