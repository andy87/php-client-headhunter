<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SkillVerificationsTestResultWithUrl.
 */
class SkillVerificationsTestResultWithUrl extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['mark' => 'mark', 'score' => 'score', 'alternate_url' => 'alternate_url', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['score', 'type', 'url', 'alternate_url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Дифференцированная оценка за тест:

* `UNFAIR` — от 0 до 14 баллов;
* `FAIR` — от 15 до 44 баллов;
* `GOOD` — от 45 до 79 баллов;
* `EXCELLENT` — от 80 до 100 баллов
 */
    public ?string $mark = null;

    /** @var int Результат прохождения теста в баллах (от 0 до 100) */
    public int $score;

    /** @var string Ссылка на результат теста на сайте */
    public string $alternate_url;

    /** @var string Ссылка на результат теста */
    public string $url;
}
