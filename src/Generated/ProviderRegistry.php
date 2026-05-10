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
            ProviderKey::AppAuthorization->value => Provider\AppAuthorizationProvider::class,
            ProviderKey::ApplicantComments->value => Provider\ApplicantCommentsProvider::class,
            ProviderKey::ApplicantInfo->value => Provider\ApplicantInfoProvider::class,
            ProviderKey::ApplicantNegotiationMessages->value => Provider\ApplicantNegotiationMessagesProvider::class,
            ProviderKey::Chats->value => Provider\ChatsProvider::class,
            ProviderKey::ClickmeStatistics->value => Provider\ClickmeStatisticsProvider::class,
            ProviderKey::CommonDictionaries->value => Provider\CommonDictionariesProvider::class,
            ProviderKey::CompanySuggests->value => Provider\CompanySuggestsProvider::class,
            ProviderKey::Dictionaries->value => Provider\DictionariesProvider::class,
            ProviderKey::Employer->value => Provider\EmployerProvider::class,
            ProviderKey::EmployerAddresses->value => Provider\EmployerAddressesProvider::class,
            ProviderKey::EmployerAuthorization->value => Provider\EmployerAuthorizationProvider::class,
            ProviderKey::EmployerInfo->value => Provider\EmployerInfoProvider::class,
            ProviderKey::EmployerManagers->value => Provider\EmployerManagersProvider::class,
            ProviderKey::EmployerNegotiations->value => Provider\EmployerNegotiationsProvider::class,
            ProviderKey::EmployerServices->value => Provider\EmployerServicesProvider::class,
            ProviderKey::KeywordSuggests->value => Provider\KeywordSuggestsProvider::class,
            ProviderKey::ManagerInfo->value => Provider\ManagerInfoProvider::class,
            ProviderKey::ResumeSearch->value => Provider\ResumeSearchProvider::class,
            ProviderKey::ResumeView->value => Provider\ResumeViewProvider::class,
            ProviderKey::SalaryDatabase->value => Provider\SalaryDatabaseProvider::class,
            ProviderKey::SalaryDictionaries->value => Provider\SalaryDictionariesProvider::class,
            ProviderKey::SavedResumeSearches->value => Provider\SavedResumeSearchesProvider::class,
            ProviderKey::Suggests->value => Provider\SuggestsProvider::class,
            ProviderKey::Vacancies->value => Provider\VacanciesProvider::class,
            ProviderKey::VacancyDrafts->value => Provider\VacancyDraftsProvider::class,
            ProviderKey::VacancyManagement->value => Provider\VacancyManagementProvider::class,
            ProviderKey::VacancySearch->value => Provider\VacancySearchProvider::class,
            ProviderKey::WebhookApi->value => Provider\WebhookApiProvider::class,
        ];
    }
}
