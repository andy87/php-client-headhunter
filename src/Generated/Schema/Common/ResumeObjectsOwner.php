<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsOwner.
 */
class ResumeObjectsOwner extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['comments' => 'comments', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'comments'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['comments' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerComments::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerComments Раздел [Комментарии к владельцу резюме](#tag/Kommentarii-k-soiskatelyu/operation/get-applicant-comments-list) */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwnerComments $comments;

    /** @var string Идентификатор владельца резюме */
    public string $id;
}
