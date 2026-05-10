<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonSenderDisplayInfo.
 */
class ChatsCommonSenderDisplayInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['icon' => 'icon', 'is_current_participant' => 'is_current_participant', 'name' => 'name', 'role' => 'role'];

    protected const REQUIRED_FIELDS = ['name', 'is_current_participant', 'icon', 'role'];

    protected const NULLABLE_FIELDS = ['icon', 'role'];

    protected const CASTS = [];

    /** @var string|null Ссылка на изображение профиля отправителя сообщения */
    public ?string $icon;

    /** @var bool Является ли текущий участник чата отправителем сообщения */
    public bool $is_current_participant;

    /** @var string Имя отправителя сообщения */
    public string $name;

    /** @var string|null Роль участника чата. Возможные значения:
APPLICANT - соискатель,
EMPLOYER - менеджер работодателя,
BOT - бот
 */
    public ?string $role;
}
