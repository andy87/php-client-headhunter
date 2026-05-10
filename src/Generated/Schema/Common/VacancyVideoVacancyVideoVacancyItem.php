<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVideoVacancyVideoVacancyItem.
 */
class VacancyVideoVacancyVideoVacancyItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cover_picture' => 'cover_picture', 'video' => 'video', 'video_url' => 'video_url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['cover_picture'];

    protected const CASTS = ['video' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideo::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyCoverPicture|null Schema field cover_picture */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyCoverPicture $cover_picture = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideo|null Schema field video */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideo $video = null;

    /** @var string|null Ссылка для скачивания видео */
    public ?string $video_url = null;
}
