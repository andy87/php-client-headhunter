<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ОткликиПриглашенияРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetResumeNegotiationsHistoryPrompt;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Get\ResumeNegotiationsHistoryResponse;

/**
 * Группа методов "get" раздела HeadHunter API "Отклики/приглашения работодателя".
 */
class GetProvider extends BaseHhProvider
{
    /**
     * История откликов/приглашений по резюме
     *
     * Возвращает последние действия с указанным резюме, ограниченные 30-ю вакансиями данного работодателя, и 10-ю изменениями состояний откликов/приглашений по каждой из этих вакансий.
     *
     * Метод требует наличия [платного доступа для работодателя](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access)
     *
     * OperationId: get-resume-negotiations-history.
     * HTTP: GET /resumes/{resume_id}/negotiations_history.
     *
     * @param GetResumeNegotiationsHistoryPrompt $prompt DTO запроса.
     *
     * @return ResumeNegotiationsHistoryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function resumeNegotiationsHistory(GetResumeNegotiationsHistoryPrompt $prompt): ResumeNegotiationsHistoryResponse
    {
        /** @var ResumeNegotiationsHistoryResponse $response */
        $response = $this->request($prompt, ResumeNegotiationsHistoryResponse::class);

        return $response;
    }
}
