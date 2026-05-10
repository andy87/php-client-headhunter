<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated;

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
            ProviderKey::ApplicantComments->value => Provider\ApplicantCommentsProvider::class,
            ProviderKey::ApplicantNegotiations->value => Provider\ApplicantNegotiationsProvider::class,
            ProviderKey::Chats->value => Provider\ChatsProvider::class,
            ProviderKey::ClickmeStatistics->value => Provider\ClickmeStatisticsProvider::class,
            ProviderKey::CommonReferenceData->value => Provider\CommonReferenceDataProvider::class,
            ProviderKey::CompanySuggestions->value => Provider\CompanySuggestionsProvider::class,
            ProviderKey::CurrentUser->value => Provider\CurrentUserProvider::class,
            ProviderKey::Employer->value => Provider\EmployerProvider::class,
            ProviderKey::EmployerAddresses->value => Provider\EmployerAddressesProvider::class,
            ProviderKey::EmployerInfo->value => Provider\EmployerInfoProvider::class,
            ProviderKey::EmployerManagers->value => Provider\EmployerManagersProvider::class,
            ProviderKey::EmployerNegotiations->value => Provider\EmployerNegotiationsProvider::class,
            ProviderKey::EmployerServices->value => Provider\EmployerServicesProvider::class,
            ProviderKey::KeywordSuggestions->value => Provider\KeywordSuggestionsProvider::class,
            ProviderKey::ManagerInfo->value => Provider\ManagerInfoProvider::class,
            ProviderKey::OAuth->value => Provider\OAuthProvider::class,
            ProviderKey::ResumeDetails->value => Provider\ResumeDetailsProvider::class,
            ProviderKey::ResumeReferenceData->value => Provider\ResumeReferenceDataProvider::class,
            ProviderKey::ResumeSearch->value => Provider\ResumeSearchProvider::class,
            ProviderKey::SalaryAnalytics->value => Provider\SalaryAnalyticsProvider::class,
            ProviderKey::SalaryReferenceData->value => Provider\SalaryReferenceDataProvider::class,
            ProviderKey::SavedResumeSearches->value => Provider\SavedResumeSearchesProvider::class,
            ProviderKey::Suggestions->value => Provider\SuggestionsProvider::class,
            ProviderKey::TokenManagement->value => Provider\TokenManagementProvider::class,
            ProviderKey::VacancyDetails->value => Provider\VacancyDetailsProvider::class,
            ProviderKey::VacancyDrafts->value => Provider\VacancyDraftsProvider::class,
            ProviderKey::VacancyManagement->value => Provider\VacancyManagementProvider::class,
            ProviderKey::VacancySearch->value => Provider\VacancySearchProvider::class,
            ProviderKey::WebhookApi->value => Provider\WebhookApiProvider::class,
        ];
    }
}
