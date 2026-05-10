<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated;

/**
 * Хранит карту лениво доступных provider-разделов HeadHunter API.
 */
class ProviderRegistry
{
    /**
     * Возвращает карту свойств клиента и provider-классов.
     *
     * @return array<string, class-string>
     */
    public static function providers(): array
    {
        return [
            'currentUser' => Provider\CurrentUserProvider::class,
            'vacancies' => Provider\VacanciesProvider::class,
        ];
    }
}
