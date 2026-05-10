<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonParticipant.
 */
class ChatsCommonParticipant extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['icon' => 'icon', 'id' => 'id', 'last_viewed_message_id' => 'last_viewed_message_id', 'name' => 'name', 'resume_id' => 'resume_id', 'role' => 'role', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'type', 'icon', 'last_viewed_message_id', 'role'];

    protected const NULLABLE_FIELDS = ['icon', 'last_viewed_message_id', 'resume_id', 'role', 'type'];

    protected const CASTS = [];

    /** @var string|null Ссылка на изображение профиля участника */
    public ?string $icon;

    /** @var string Идентификатор участника чата */
    public string $id;

    /** @var string|null Идентификатор последнего просмотренного сообщения */
    public ?string $last_viewed_message_id;

    /** @var string Имя участника чата */
    public string $name;

    /** @var string|null Идентификатор резюме. Возвращается только для участника с ролью APPLICANT
 */
    public ?string $resume_id = null;

    /** @var string|null Роль участника чата. Возможные значения:
APPLICANT - соискатель,
EMPLOYER - менеджер работодателя,
BOT - бот
 */
    public ?string $role;

    /** @var string|null Тип участника чата */
    public ?string $type;
}
