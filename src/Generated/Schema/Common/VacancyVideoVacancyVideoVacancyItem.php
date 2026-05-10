<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVideoVacancyVideoVacancyItem.
 */
class VacancyVideoVacancyVideoVacancyItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cover_picture' => 'cover_picture', 'video' => 'video', 'video_url' => 'video_url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['cover_picture'];

    protected const CASTS = ['video' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideo::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyCoverPicture|null Schema field cover_picture */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyCoverPicture $cover_picture = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideo|null Schema field video */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideo $video = null;

    /** @var string|null Ссылка для скачивания видео */
    public ?string $video_url = null;
}
