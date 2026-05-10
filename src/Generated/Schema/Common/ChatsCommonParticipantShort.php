<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonParticipantShort.
 */
class ChatsCommonParticipantShort extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['icon' => 'icon', 'id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'icon'];

    protected const NULLABLE_FIELDS = ['icon'];

    protected const CASTS = [];

    /** @var string|null Ссылка на изображение профиля участника */
    public ?string $icon;

    /** @var string Идентификатор участника чата */
    public string $id;

    /** @var string Имя участника чата */
    public string $name;
}
