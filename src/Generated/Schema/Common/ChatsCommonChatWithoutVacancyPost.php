<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonChatWithoutVacancyPost.
 */
class ChatsCommonChatWithoutVacancyPost extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['first_message' => 'first_message', 'resume_hash' => 'resume_hash'];

    protected const REQUIRED_FIELDS = ['resume_hash', 'first_message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текст сообщения */
    public string $first_message;

    /** @var string Хэш резюме, к которому будет привязан чат без вакансии */
    public string $resume_hash;
}
