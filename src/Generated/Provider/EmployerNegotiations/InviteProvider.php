<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\EmployerNegotiations;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\InviteApplicantToVacancyPrompt;
use Andy87\ClientsHh\Generated\Response\EmployerNegotiations\Invite\ApplicantToVacancyResponse;

/**
 * Группа методов "invite" раздела HeadHunter API "Отклики/приглашения работодателя".
 */
class InviteProvider extends BaseHhProvider
{
    /**
     * Пригласить соискателя на вакансию
     *
     * Запрос формирует приглашение на вакансию для соискателя по инициативе работодателя.
     *
     * > Вместо `phone_interview` необходимо сформировать запрос из параметра `negotiations_actions[].url` [списка подходящих вакансий к резюме](#tag/Upravlenie-vakansiyami/operation/get-active-vacancy-list), передав аргументы из массива `negotiations_actions[].arguments`.
     *
     * Пример запроса:
     *
     * ```
     * POST /negotiations/phone_interview?resume_id=123456&vacancy_id=654321&message=new_msg
     * ```
     *
     * OperationId: invite-applicant-to-vacancy.
     * HTTP: POST /negotiations/phone_interview.
     *
     * @param InviteApplicantToVacancyPrompt $prompt DTO запроса.
     *
     * @return ApplicantToVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicantToVacancy(InviteApplicantToVacancyPrompt $prompt): ApplicantToVacancyResponse
    {
        /** @var ApplicantToVacancyResponse $response */
        $response = $this->request($prompt, ApplicantToVacancyResponse::class);

        return $response;
    }
}
