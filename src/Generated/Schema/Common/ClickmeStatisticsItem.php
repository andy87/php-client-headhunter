<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ClickmeStatisticsItem.
 */
class ClickmeStatisticsItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amount' => 'amount', 'campaign_id' => 'campaign_id', 'campaign_title' => 'campaign_title', 'campaign_type' => 'campaign_type', 'clickme_account_id' => 'clickme_account_id', 'clickme_account_title' => 'clickme_account_title', 'clicks' => 'clicks', 'date_end' => 'date_end', 'date_start' => 'date_start', 'impressions' => 'impressions', 'responses' => 'responses', 'url' => 'url', 'vacancy_area_name' => 'vacancy_area_name', 'vacancy_id' => 'vacancy_id', 'vacancy_title' => 'vacancy_title'];

    protected const REQUIRED_FIELDS = ['clickme_account_id', 'vacancy_id', 'vacancy_title', 'vacancy_area_name', 'url', 'campaign_id', 'campaign_type', 'campaign_title', 'impressions', 'clicks', 'responses', 'amount', 'date_start', 'date_end'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Траты на рекламную кампанию */
    public float $amount;

    /** @var string ID рекламной кампании Clickme */
    public string $campaign_id;

    /** @var string Название рекламной кампании Clickme */
    public string $campaign_title;

    /** @var string Тип рекламной кампании Clickme */
    public string $campaign_type;

    /** @var string ID аккаунта Clickme */
    public string $clickme_account_id;

    /** @var string|null Название аккаунта Clickme */
    public ?string $clickme_account_title = null;

    /** @var int Количество кликов */
    public int $clicks;

    /** @var string Дата самого позднего показа/клика рекламной кампании в указанном диапазоне (date_from - date_to) */
    public string $date_end;

    /** @var string Дата самого раннего показа/клика рекламной кампании в указанном диапазоне (date_from - date_to) */
    public string $date_start;

    /** @var int Количество показов */
    public int $impressions;

    /** @var int Количество откликов на вакансию во время подключения Clickme */
    public int $responses;

    /** @var string Продвигаемая ссылка */
    public string $url;

    /** @var string Регион вакансии */
    public string $vacancy_area_name;

    /** @var string ID вакансии */
    public string $vacancy_id;

    /** @var string Название вакансии */
    public string $vacancy_title;
}
