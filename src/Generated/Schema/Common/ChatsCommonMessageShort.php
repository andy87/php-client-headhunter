<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonMessageShort.
 */
class ChatsCommonMessageShort extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['creation_time' => 'creation_time', 'id' => 'id', 'payload' => 'payload', 'sender_display_info' => 'sender_display_info', 'sender_participant_id' => 'sender_participant_id', 'viewed_by_opponent' => 'viewed_by_opponent'];

    protected const REQUIRED_FIELDS = ['id', 'creation_time', 'sender_participant_id', 'sender_display_info', 'payload'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['sender_display_info' => \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonSenderDisplayInfo::class];

    /** @var string Время создания сообщения */
    public string $creation_time;

    /** @var string Идентификатор сообщения */
    public string $id;

    /** @var array<string, mixed> Полезная нагрузка сообщения. Все поля необязательны для заполнения, но одно из них обязательно должно быть в payload.
* `text` - содержит текст сообщения, null если есть `attachments`
* `attachments` - содержит вложения, null если есть `text`
 */
    public array $payload;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonSenderDisplayInfo Schema field sender_display_info */
    public \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonSenderDisplayInfo $sender_display_info;

    /** @var string Идентификатор отправителя сообщения */
    public string $sender_participant_id;

    /** @var bool|null Флаг, обозначающий факт просмотра сообщения оппонентом по чату (для работодателя оппонентом является соискатель) */
    public ?bool $viewed_by_opponent = null;
}
