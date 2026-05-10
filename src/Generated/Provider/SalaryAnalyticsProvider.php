<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetSalaryEvaluationPrompt;
use and_y87\ClientsHh\Generated\Response\GetSalaryEvaluationResponse;

/**
 * Provider раздела HeadHunter API "Банк данных о зарплатах".
 * @property-read SalaryAnalytics\SalaryProvider $salary
 *
 */
class SalaryAnalyticsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'salary' => SalaryAnalytics\SalaryProvider::class,
    ];

    /**
     * Оценка заработной платы без прогноза
     *
     * Возвращает статистику зарплат в соответствии с указанными параметрами запроса. Пользователь должен иметь доступ к платным отчетам [банка зарплат](https://salary.hh.ru/promo).
     *
     * Как это работает:
     *
     * * Основным источником данных для статистики служит информация о зарплатах, предоставляемая участниками проекта [Банк данных заработных плат](https://salary.hh.ru/promo).
     * * Все анкеты участников проходят проверку модераторами. Если заявленная участником зарплата сильно отличается от средней по рынку, она не будет включена в банк данных.
     * * Если в банке недостаточно данных для построения статистики по запросу, сервис использует следующие приемы:
     *
     *     * Объединяет сведения из нескольких отраслей, если недостаточно данных по запрошенной отрасли.
     *     * Объединяет сведения из нескольких близких специализаций, если недостаточно данных по запрошенной специализации.
     *     * Объединяет сведения из нескольких городов, если недостаточно данных по запрошенному городу.
     *     * Использует сведения по запрошенным специализациям из другого региона, если недостаточно данных по запрошенному региону. При этом вычисляется поправочный коэффициент, который отражает разницу в зарплатах между регионами.
     *
     *     Если эти приемы не позволяют получить достаточную выборку, сервис может использовать информацию о зарплатах из вакансий и резюме. Такая информация не проходит предварительную модерацию и считается менее надежной, поэтому используется только в крайнем случае. Чтобы использовать эту функцию, передайте в запросе параметр `extend_sources=true`
     *
     * OperationId: get-salary-evaluation.
     * HTTP: GET /salary_statistics/paid/salary_evaluation/{area_id}.
     *
     * @param GetSalaryEvaluationPrompt $prompt DTO запроса.
     *
     * @return GetSalaryEvaluationResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSalaryEvaluation(GetSalaryEvaluationPrompt $prompt): GetSalaryEvaluationResponse
    {
        /** @var SalaryAnalytics\SalaryProvider $group */
        $group = $this->operationGroup('salary');

        return $group->getEvaluation($prompt);
    }
}
