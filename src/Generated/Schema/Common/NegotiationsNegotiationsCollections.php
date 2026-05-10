<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsCollections.
 */
class NegotiationsNegotiationsCollections extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['collections' => 'collections', 'employer_states' => 'employer_states', 'generated_collections' => 'generated_collections'];

    protected const REQUIRED_FIELDS = ['collections', 'generated_collections', 'employer_states'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['collections' => [\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsCollection::class], 'employer_states' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState::class], 'generated_collections' => [\Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsCollection::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsCollection> Коллекции откликов/приглашений для данной вакансии */
    public array $collections;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState> Состояния [откликов/приглашений](#term-employer-state) вакансии для работодателя
 */
    public array $employer_states;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsCollection> Сгенерированные коллекции откликов/приглашений для данной вакансии */
    public array $generated_collections;
}
