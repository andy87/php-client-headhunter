<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsVacancyAddEditForbiddenError.
 */
class ErrorsVacancyAddEditForbiddenError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'found' => 'found', 'items' => 'items', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = ['description', 'found', 'items'];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesNumericId::class]];

    /** @var string|null Описание ошибки
 */
    public ?string $description = null;

    /** @var float|null Общее количество дубликатов вакансии. Возвращается только для `"value": "duplicate"`
 */
    public ?float $found = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesNumericId>|null Ограниченное количество записей с информацией о дубликатах. Не гарантирует выдачу всех дубликатов. Возвращается только для `"value": "duplicate"`
 */
    public ?array $items = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Ошибки при публикации и редактировании вакансии:
  * `not_enough_purchased_services` — купленных услуг недостаточно для публикации или обновления данного типа вакансии
  * `quota_exceeded` — квота менеджера на публикацию данного типа вакансии закончилась
  * `duplicate` — аналогичная вакансия уже опубликована. В ответе передается информация по дубликатам вакансии. Данную ошибку можно форсировано отключить параметром `?ignore_duplicates=true`
  * `replacement` — вакансия существенно изменена, есть риски блокировки. Чтобы проигнорировать риск блокировки, следует отправить повторный запрос с параметром `?ignore_replacement_warning=true`
  * `creation_forbidden` — публикация вакансий недоступна текущему менеджеру
  * `unavailable_for_archived` — редактирование недоступно для архивной вакансии
  * `conflict_changes` — конфликтные изменения данных вакансии
 */
    public string $value;
}
