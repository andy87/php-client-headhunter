<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookPayloadChatMessageCreated.
 */
class WebhookPayloadChatMessageCreated extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chat_id' => 'chat_id', 'creation_time' => 'creation_time', 'is_current_participant' => 'is_current_participant', 'message_id' => 'message_id', 'message_type' => 'message_type', 'role' => 'role', 'sender_participant_id' => 'sender_participant_id'];

    protected const REQUIRED_FIELDS = ['chat_id', 'message_id', 'message_type', 'sender_participant_id', 'is_current_participant', 'creation_time', 'role'];

    protected const NULLABLE_FIELDS = ['role'];

    protected const CASTS = [];

    /** @var string Идентификатор чата */
    public string $chat_id;

    /** @var string Время создания сообщения */
    public string $creation_time;

    /** @var bool Является ли получатель события отправителем сообщения */
    public bool $is_current_participant;

    /** @var string Идентификатор сообщения в чате */
    public string $message_id;

    /** @var string Тип сообщения
Возможные значения:
* `SIMPLE` - сообщение с текстом либо вложениями
* `PARTICIPANT_LEFT` - участник покинул чат
* `PARTICIPANT_JOINED` - участник добавлен в чат
 */
    public string $message_type;

    /** @var string|null Роль участника чата. Возможные значения:
APPLICANT - соискатель,
EMPLOYER - менеджер работодателя,
BOT - бот
 */
    public ?string $role;

    /** @var string Идентификатор отправителя сообщения */
    public string $sender_participant_id;
}
