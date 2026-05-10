<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsStatistics.
 */
class NegotiationsNegotiationsStatistics extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['average_reply_time' => 'average_reply_time', 'politeness' => 'politeness', 'received' => 'received', 'replied_percent' => 'replied_percent', 'viewed_percent' => 'viewed_percent'];

    protected const REQUIRED_FIELDS = ['received'];

    protected const NULLABLE_FIELDS = ['average_reply_time', 'politeness', 'replied_percent', 'viewed_percent'];

    protected const CASTS = [];

    /** @var float|null Среднее время (в днях) между получением отклика и отправкой сообщения */
    public ?float $average_reply_time = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsPoliteness|null Индекс вежливости */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsObjectsPoliteness $politeness = null;

    /** @var float Количество откликов на вакансии, полученных за период (последние 30 дней) */
    public float $received;

    /** @var float|null Процент откликов на вакансии, перемещенных в любую другую [коллекцию](#term-collection) с отправкой сообщения, за период
 */
    public ?float $replied_percent = null;

    /** @var float|null Процент прочитанных откликов за период */
    public ?float $viewed_percent = null;
}
