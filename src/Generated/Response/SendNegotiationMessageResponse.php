<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [POST] /negotiations/{nid}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/send-negotiation-message
 */
class SendNegotiationMessageResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['author' => 'author', 'created_at' => 'created_at', 'editable' => 'editable', 'id' => 'id', 'read' => 'read', 'state' => 'state', 'text' => 'text', 'viewed_by_me' => 'viewed_by_me', 'viewed_by_opponent' => 'viewed_by_opponent', 'address' => 'address'];

    protected const REQUIRED_FIELDS = ['id', 'viewed_by_me', 'viewed_by_opponent', 'editable', 'created_at', 'text', 'state', 'author', 'address'];

    protected const NULLABLE_FIELDS = ['text', 'address'];

    protected const CASTS = ['author' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsAuthor::class, 'state' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsMessageSent::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsAuthor Response field author */
    public \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsAuthor $author;

    /** @var string Дата и время создания сообщения */
    public string $created_at;

    /** @var bool Можно ли редактировать текст сообщения */
    public bool $editable;

    /** @var string Идентификатор сообщения */
    public string $id;

    /** @var bool|null Можно ли прочитать сообщение */
    public ?bool $read = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Состояние сообщения */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $state;

    /** @var string|null Текст сообщения */
    public ?string $text;

    /** @var bool Прочитано ли сообщение смотрящим (для сообщений отправленных соискателем - всегда true) */
    public bool $viewed_by_me;

    /** @var bool Прочитано ли сообщение работодателем (для сообщений работодателя - true) */
    public bool $viewed_by_opponent;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressOutput|null Response field address */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressOutput $address;
}
