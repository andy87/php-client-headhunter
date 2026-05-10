<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonChatBasic.
 */
class ChatsCommonChatBasic extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['block_reason' => 'block_reason', 'creation_time' => 'creation_time', 'display' => 'display', 'id' => 'id', 'muted' => 'muted', 'type' => 'type', 'unread_message_count' => 'unread_message_count'];

    protected const REQUIRED_FIELDS = ['id', 'display', 'creation_time', 'unread_message_count', 'muted', 'block_reason', 'type'];

    protected const NULLABLE_FIELDS = ['block_reason'];

    protected const CASTS = ['display' => \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonDisplayInfo::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonBlockReason|null Schema field block_reason */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonBlockReason $block_reason;

    /** @var string Время создания чата */
    public string $creation_time;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonDisplayInfo Schema field display */
    public \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonDisplayInfo $display;

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
}
