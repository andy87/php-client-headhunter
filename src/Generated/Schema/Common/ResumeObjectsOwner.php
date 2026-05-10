<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsOwner.
 */
class ResumeObjectsOwner extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['comments' => 'comments', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'comments'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['comments' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerComments::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerComments Раздел [Комментарии к владельцу резюме](#tag/Kommentarii-k-soiskatelyu/operation/get-applicant-comments-list) */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerComments $comments;

    /** @var string Идентификатор владельца резюме */
    public string $id;
}
