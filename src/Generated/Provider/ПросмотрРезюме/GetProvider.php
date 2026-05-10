<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ПросмотрРезюме;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetResumePrompt;
use Andy87\ClientsHh\Generated\Response\ПросмотрРезюме\Get\ResumeResponse;

/**
 * Группа методов "get" раздела HeadHunter API "Просмотр резюме".
 */
class GetProvider extends BaseHhProvider
{
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
     * @return ResumeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function resume(GetResumePrompt $prompt): ResumeResponse
    {
        /** @var ResumeResponse $response */
        $response = $this->request($prompt, ResumeResponse::class);

        return $response;
    }
}
