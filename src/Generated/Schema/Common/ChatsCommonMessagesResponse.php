<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonMessagesResponse.
 */
class ChatsCommonMessagesResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['block_reason' => 'block_reason', 'creation_time' => 'creation_time', 'display' => 'display', 'id' => 'id', 'muted' => 'muted', 'type' => 'type', 'unread_message_count' => 'unread_message_count', 'has_more' => 'has_more', 'messages' => 'messages', 'chat_states' => 'chat_states', 'vacancy_id' => 'vacancy_id'];

    protected const REQUIRED_FIELDS = ['id', 'display', 'creation_time', 'unread_message_count', 'muted', 'block_reason', 'type', 'has_more', 'messages', 'chat_states'];

    protected const NULLABLE_FIELDS = ['block_reason', 'vacancy_id'];

    protected const CASTS = ['display' => \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonDisplayInfo::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonBlockReason|null Schema field block_reason */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonBlockReason $block_reason;

    /** @var string Время создания чата */
    public string $creation_time;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonDisplayInfo Schema field display */
    public \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonDisplayInfo $display;

    /** @var string Идентификатор чата */
    public string $id;

    /** @var bool Отключены ли уведомления */
    public bool $muted;

    /** @var string Тип чата
Возможные значения:
* `NEGOTIATION` — чат-отклик. Чат, который привязан к отклику/приглашению на вакансию.
* `SUPPORT` — чат поддержки.
* `BOT` — чат с ботом один на один
* `COMMON` — общий тип чата
 */
    public string $type;

    /** @var int Кол-во непрочитанных сообщений */
    public int $unread_message_count;

    /** @var bool Доступны сообщения для следующей выборки
* `true` —  последующий запрос с текущим значением параметра `order` вернет не пустой массив `messages`
* `false` — последующий запрос с текущим значением параметра `order` вернет пустой массив `messages`
 */
    public bool $has_more;

    /** @var array<int, array<string, mixed>> Список сообщений */
    public array $messages;

    /** @var array<string, mixed> Состояние чата */
    public array $chat_states;

    /** @var string|null Идентификатор вакансии */
    public ?string $vacancy_id = null;
}
