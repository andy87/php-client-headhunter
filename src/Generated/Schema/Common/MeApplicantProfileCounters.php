<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeApplicantProfileCounters.
 */
class MeApplicantProfileCounters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['new_resume_views' => 'new_resume_views', 'resumes_count' => 'resumes_count', 'unread_negotiations' => 'unread_negotiations'];

    protected const REQUIRED_FIELDS = ['unread_negotiations', 'new_resume_views', 'resumes_count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Общее количество новых просмотров всех резюме текущего пользователя */
    public int $new_resume_views;

    /** @var int Общее количество созданных резюме текущего пользователя */
    public int $resumes_count;

    /** @var int Количество новых непрочитанных откликов (у которых `has_updates: true`) */
    public int $unread_negotiations;
}
