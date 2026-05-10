<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated;

/**
 * Стабильные ASCII-ключи provider-разделов HeadHunter API.
 */
enum ProviderKey: string
{
    case AppAuthorization = 'appAuthorization';
    case ApplicantComments = 'applicantComments';
    case ApplicantInfo = 'applicantInfo';
    case ApplicantNegotiationMessages = 'applicantNegotiationMessages';
    case Chats = 'chats';
    case ClickmeStatistics = 'clickmeStatistics';
    case CommonDictionaries = 'commonDictionaries';
    case CompanySuggests = 'companySuggests';
    case Dictionaries = 'dictionaries';
    case Employer = 'employer';
    case EmployerAddresses = 'employerAddresses';
    case EmployerAuthorization = 'employerAuthorization';
    case EmployerInfo = 'employerInfo';
    case EmployerManagers = 'employerManagers';
    case EmployerNegotiations = 'employerNegotiations';
    case EmployerServices = 'employerServices';
    case KeywordSuggests = 'keywordSuggests';
    case ManagerInfo = 'managerInfo';
    case ResumeSearch = 'resumeSearch';
    case ResumeView = 'resumeView';
    case SalaryDatabase = 'salaryDatabase';
    case SalaryDictionaries = 'salaryDictionaries';
    case SavedResumeSearches = 'savedResumeSearches';
    case Suggests = 'suggests';
    case Vacancies = 'vacancies';
    case VacancyDrafts = 'vacancyDrafts';
    case VacancyManagement = 'vacancyManagement';
    case VacancySearch = 'vacancySearch';
    case WebhookApi = 'webhookApi';
}
