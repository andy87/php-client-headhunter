<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookSendObjectBaseUser.
 */
class WebhookSendObjectBaseUser extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['action_type' => 'action_type', 'id' => 'id', 'payload' => 'payload', 'subscription_id' => 'subscription_id', 'user_id' => 'user_id'];

    protected const REQUIRED_FIELDS = ['id', 'subscription_id', 'action_type', 'user_id', 'payload'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Тип экшена */
    public string $action_type;

    /** @var string Идентификатор сообщения */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\WebhookPayloadNewNegotiationVacancy Schema field payload */
    public \and_y87\ClientsHh\Generated\Schema\Common\WebhookPayloadNewNegotiationVacancy $payload;

    /** @var string Идентификатор подписки */
    public string $subscription_id;

    /** @var string Идентификатор пользователя. Поле может быть равно 0 для сохранения обратной совместимости */
    public string $user_id;
}
