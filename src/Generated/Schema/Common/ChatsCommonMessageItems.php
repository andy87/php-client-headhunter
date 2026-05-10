<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonMessageItems.
 */
class ChatsCommonMessageItems extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['has_more' => 'has_more', 'messages' => 'messages'];

    protected const REQUIRED_FIELDS = ['has_more', 'messages'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool Доступны сообщения для следующей выборки
* `true` —  последующий запрос с текущим значением параметра `order` вернет не пустой массив `messages`
* `false` — последующий запрос с текущим значением параметра `order` вернет пустой массив `messages`
 */
    public bool $has_more;

    /** @var array<int, array<string, mixed>> Список сообщений */
    public array $messages;
}
