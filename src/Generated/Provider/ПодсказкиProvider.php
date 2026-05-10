<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAreaLeavesSuggestsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetAreasSuggestsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetEducationalInstitutionsSuggestsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetFieldsOfStudySuggestionsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetPositionsSuggestionsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetProfessionalRolesSuggestsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetSkillSetSuggestsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyPositionsSuggestsPrompt;
use Andy87\ClientsHh\Generated\Response\GetAreaLeavesSuggestsResponse;
use Andy87\ClientsHh\Generated\Response\GetAreasSuggestsResponse;
use Andy87\ClientsHh\Generated\Response\GetEducationalInstitutionsSuggestsResponse;
use Andy87\ClientsHh\Generated\Response\GetFieldsOfStudySuggestionsResponse;
use Andy87\ClientsHh\Generated\Response\GetPositionsSuggestionsResponse;
use Andy87\ClientsHh\Generated\Response\GetProfessionalRolesSuggestsResponse;
use Andy87\ClientsHh\Generated\Response\GetSkillSetSuggestsResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyPositionsSuggestsResponse;

/**
 * Provider раздела HeadHunter API "Подсказки".
 * @property-read Подсказки\AreaProvider $area
 * @property-read Подсказки\AreasProvider $areas
 * @property-read Подсказки\EducationalProvider $educational
 * @property-read Подсказки\FieldsProvider $fields
 * @property-read Подсказки\PositionsProvider $positions
 * @property-read Подсказки\ProfessionalProvider $professional
 * @property-read Подсказки\SkillProvider $skill
 * @property-read Подсказки\VacancyProvider $vacancy
 *
 */
class ПодсказкиProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'area' => Подсказки\AreaProvider::class,
        'areas' => Подсказки\AreasProvider::class,
        'educational' => Подсказки\EducationalProvider::class,
        'fields' => Подсказки\FieldsProvider::class,
        'positions' => Подсказки\PositionsProvider::class,
        'professional' => Подсказки\ProfessionalProvider::class,
        'skill' => Подсказки\SkillProvider::class,
        'vacancy' => Подсказки\VacancyProvider::class,
    ];

    /**
     * Подсказки по регионам, являющимися листами в дереве регионов
     *
     * Также доступна загрузка [полного дерева регионов](#tag/Obshie-spravochniki/operation/get-areas) и [части дерева от определенного элемента](#tag/Obshie-spravochniki/operation/get-areas-from-specified)
     *
     * OperationId: get-area-leaves-suggests.
     * HTTP: GET /suggests/area_leaves.
     *
     * @param GetAreaLeavesSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetAreaLeavesSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAreaLeavesSuggests(GetAreaLeavesSuggestsPrompt $prompt): GetAreaLeavesSuggestsResponse
    {
        /** @var Подсказки\AreaProvider $group */
        $group = $this->operationGroup('area');

        return $group->getLeavesSuggests($prompt);
    }

    /**
     * Подсказки по регионам
     *
     * Также доступна загрузка [полного дерева регионов](#tag/Obshie-spravochniki/operation/get-areas) и [части дерева от определенного элемента](#tag/Obshie-spravochniki/operation/get-areas-from-specified)
     *
     * OperationId: get-areas-suggests.
     * HTTP: GET /suggests/areas.
     *
     * @param GetAreasSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetAreasSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAreasSuggests(GetAreasSuggestsPrompt $prompt): GetAreasSuggestsResponse
    {
        /** @var Подсказки\AreasProvider $group */
        $group = $this->operationGroup('areas');

        return $group->getSuggests($prompt);
    }

    /**
     * Подсказки по названиям учебных заведений
     *
     * Чтобы узнать список факультетов, обратитесь к [соответствующему методу](#tag/Spravochniki/operation/get-educational-institutions-dictionary)
     *
     * OperationId: get-educational-institutions-suggests.
     * HTTP: GET /suggests/educational_institutions.
     *
     * @param GetEducationalInstitutionsSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetEducationalInstitutionsSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEducationalInstitutionsSuggests(GetEducationalInstitutionsSuggestsPrompt $prompt): GetEducationalInstitutionsSuggestsResponse
    {
        /** @var Подсказки\EducationalProvider $group */
        $group = $this->operationGroup('educational');

        return $group->getInstitutionsSuggests($prompt);
    }

    /**
     * Подсказки по специализациям
     *
     * OperationId: get-fields-of-study-suggestions.
     * HTTP: GET /suggests/fields_of_study.
     *
     * @param GetFieldsOfStudySuggestionsPrompt $prompt DTO запроса.
     *
     * @return GetFieldsOfStudySuggestionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getFieldsOfStudySuggestions(GetFieldsOfStudySuggestionsPrompt $prompt): GetFieldsOfStudySuggestionsResponse
    {
        /** @var Подсказки\FieldsProvider $group */
        $group = $this->operationGroup('fields');

        return $group->getOfStudySuggestions($prompt);
    }

    /**
     * Подсказки по должностям резюме
     *
     * OperationId: get-positions-suggestions.
     * HTTP: GET /suggests/positions.
     *
     * @param GetPositionsSuggestionsPrompt $prompt DTO запроса.
     *
     * @return GetPositionsSuggestionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPositionsSuggestions(GetPositionsSuggestionsPrompt $prompt): GetPositionsSuggestionsResponse
    {
        /** @var Подсказки\PositionsProvider $group */
        $group = $this->operationGroup('positions');

        return $group->getSuggestions($prompt);
    }

    /**
     * Подсказки по профессиональным ролям
     *
     * OperationId: get-professional-roles-suggests.
     * HTTP: GET /suggests/professional_roles.
     *
     * @param GetProfessionalRolesSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetProfessionalRolesSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getProfessionalRolesSuggests(GetProfessionalRolesSuggestsPrompt $prompt): GetProfessionalRolesSuggestsResponse
    {
        /** @var Подсказки\ProfessionalProvider $group */
        $group = $this->operationGroup('professional');

        return $group->getRolesSuggests($prompt);
    }

    /**
     * Подсказки по ключевым навыкам
     *
     * OperationId: get-skill-set-suggests.
     * HTTP: GET /suggests/skill_set.
     *
     * @param GetSkillSetSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetSkillSetSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSkillSetSuggests(GetSkillSetSuggestsPrompt $prompt): GetSkillSetSuggestsResponse
    {
        /** @var Подсказки\SkillProvider $group */
        $group = $this->operationGroup('skill');

        return $group->getSetSuggests($prompt);
    }

    /**
     * Подсказки по должностям вакансий
     *
     * OperationId: get-vacancy-positions-suggests.
     * HTTP: GET /suggests/vacancy_positions.
     *
     * @param GetVacancyPositionsSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetVacancyPositionsSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyPositionsSuggests(GetVacancyPositionsSuggestsPrompt $prompt): GetVacancyPositionsSuggestsResponse
    {
        /** @var Подсказки\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getPositionsSuggests($prompt);
    }
}
