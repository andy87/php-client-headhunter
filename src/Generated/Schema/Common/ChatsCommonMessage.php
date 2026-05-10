<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonMessage.
 */
class ChatsCommonMessage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['can_edit' => 'can_edit', 'creation_time' => 'creation_time', 'id' => 'id', 'last_change_time' => 'last_change_time', 'payload' => 'payload', 'sender_display_info' => 'sender_display_info', 'sender_participant_id' => 'sender_participant_id', 'type' => 'type', 'viewed_by_opponent' => 'viewed_by_opponent'];

    protected const REQUIRED_FIELDS = ['id', 'creation_time', 'last_change_time', 'can_edit', 'sender_participant_id', 'sender_display_info', 'type', 'payload', 'viewed_by_opponent'];

    protected const NULLABLE_FIELDS = ['last_change_time'];

    protected const CASTS = ['sender_display_info' => \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonSenderDisplayInfo::class];

    /** @var bool Можно ли отредактировать сообщение */
    public bool $can_edit;

    /** @var string Время создания сообщения
(в формате [ISO 8601](https://ru.wikipedia.org/wiki/ISO_8601) с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`)
 */
    public string $creation_time;

    /** @var string Идентификатор сообщения */
    public string $id;

    /** @var string|null Время последнего редактирования сообщения
(в формате [ISO 8601](https://ru.wikipedia.org/wiki/ISO_8601) с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`)
 */
    public ?string $last_change_time;

    /** @var array<string, mixed> Полезная нагрузка сообщения. Все поля необязательны для заполнения, но одно из них обязательно должно быть в payload.
* `text` - содержит текст сообщения, null если есть `attachments` либо `moved_participant`
* `attachments` - содержит вложения, null если есть `text` либо `moved_participant`
* `moved_participant` - содержит данные об изменении участников чата, null если есть `text` либо `attachments`
 */
    public array $payload;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonSenderDisplayInfo Schema field sender_display_info */
    public \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonSenderDisplayInfo $sender_display_info;

    /** @var string Идентификатор отправителя сообщения */
    public string $sender_participant_id;

    /** @var string Тип сообщения
Возможные значения:
* `SIMPLE` - сообщение с текстом либо вложениями
* `PARTICIPANT_LEFT` - участник покинул чат
* `PARTICIPANT_JOINED` - участник добавлен в чат
 */
    public string $type;

    /** @var bool Флаг, обозначающий факт просмотра сообщения оппонентом по чату (для работодателя оппонентом является соискатель) */
    public bool $viewed_by_opponent;
}
