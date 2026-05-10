<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetResumePrompt;
use and_y87\ClientsHh\Generated\Response\GetResumeResponse;

/**
 * Provider раздела HeadHunter API "Просмотр резюме".
 * @property-read ResumeDetails\GetProvider $get
 *
 */
class ResumeDetailsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'get' => ResumeDetails\GetProvider::class,
    ];

    /**
     * Просмотр резюме
     *
     * Возвращает информацию об указанном резюме.
     *
     * Особенности работы метода при запросе от работодателя:
     *
     * * Требуется наличие [платного доступа](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access).
     * * При просмотре резюме с контактами действуют [специальные правила](#tag/Prosmotr-rezyume/Prosmotr-rezyume-s-kontaktami).
     * * Если просмотр полных данных по резюме недоступен при текущей авторизации, в некоторых полях вернется `null`, поле `can_view_full_info` будет иметь значение `false`, а поле `contact_view_status` - `NONE`.
     * * Если у работодателя есть отклик/приглашение на это резюме, отклик будет считаться просмотренным (только в том случае, если передан query-параметр topic_id с соответствующим идентификатором отклика)
     *
     * OperationId: get-resume.
     * HTTP: GET /resumes/{resume_id}.
     *
     * @param GetResumePrompt $prompt DTO запроса.
     *
     * @return GetResumeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getResume(GetResumePrompt $prompt): GetResumeResponse
    {
        /** @var ResumeDetails\GetProvider $group */
        $group = $this->operationGroup('get');

        return $group->resume($prompt);
    }
}
