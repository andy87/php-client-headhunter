<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\AddApplicantCommentPrompt;
use Andy87\ClientsHh\Generated\Prompt\DeleteApplicantCommentPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetApplicantCommentsListPrompt;
use Andy87\ClientsHh\Generated\Prompt\UpdateApplicantCommentPrompt;
use Andy87\ClientsHh\Generated\Response\AddApplicantCommentResponse;
use Andy87\ClientsHh\Generated\Response\DeleteApplicantCommentResponse;
use Andy87\ClientsHh\Generated\Response\GetApplicantCommentsListResponse;
use Andy87\ClientsHh\Generated\Response\UpdateApplicantCommentResponse;

/**
 * Provider раздела HeadHunter API "Комментарии к соискателю".
 * @property-read ApplicantComments\ApplicantProvider $applicant
 *
 */
class ApplicantCommentsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'applicant' => ApplicantComments\ApplicantProvider::class,
    ];

    /**
     * Добавление комментария
     *
     * Метод требует наличия [платного доступа для работодателя](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access)
     *
     * OperationId: add-applicant-comment.
     * HTTP: POST /applicant_comments/{applicant_id}.
     *
     * @param AddApplicantCommentPrompt $prompt DTO запроса.
     *
     * @return AddApplicantCommentResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addApplicantComment(AddApplicantCommentPrompt $prompt): AddApplicantCommentResponse
    {
        /** @var ApplicantComments\ApplicantProvider $group */
        $group = $this->operationGroup('applicant');

        return $group->addComment($prompt);
    }

    /**
     * Удаление комментария
     *
     * Метод требует наличия [платного доступа для работодателя](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access).
     *
     * Удалить комментарий может только его автор
     *
     * OperationId: delete-applicant-comment.
     * HTTP: DELETE /applicant_comments/{applicant_id}/{comment_id}.
     *
     * @param DeleteApplicantCommentPrompt $prompt DTO запроса.
     *
     * @return DeleteApplicantCommentResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteApplicantComment(DeleteApplicantCommentPrompt $prompt): DeleteApplicantCommentResponse
    {
        /** @var ApplicantComments\ApplicantProvider $group */
        $group = $this->operationGroup('applicant');

        return $group->deleteComment($prompt);
    }

    /**
     * Получение списка комментариев
     *
     * Метод требует наличия [платного доступа для работодателя](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access).
     *
     * Список будет содержать комментарии текущего пользователя, а также комментарии других менеджеров компании, если они открыли доступ к ним при публикации
     *
     * OperationId: get-applicant-comments-list.
     * HTTP: GET /applicant_comments/{applicant_id}.
     *
     * @param GetApplicantCommentsListPrompt $prompt DTO запроса.
     *
     * @return GetApplicantCommentsListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getApplicantCommentsList(GetApplicantCommentsListPrompt $prompt): GetApplicantCommentsListResponse
    {
        /** @var ApplicantComments\ApplicantProvider $group */
        $group = $this->operationGroup('applicant');

        return $group->getCommentsList($prompt);
    }

    /**
     * Обновление комментария
     *
     * Метод требует наличия [платного доступа для работодателя](#tag/Uslugi-rabotodatelya/operation/get-payable-api-method-access).
     *
     * Автор комментария может изменить его текст и тип доступа. Если параметр не передан, то его значение останется прежним
     *
     * OperationId: update-applicant-comment.
     * HTTP: PUT /applicant_comments/{applicant_id}/{comment_id}.
     *
     * @param UpdateApplicantCommentPrompt $prompt DTO запроса.
     *
     * @return UpdateApplicantCommentResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function updateApplicantComment(UpdateApplicantCommentPrompt $prompt): UpdateApplicantCommentResponse
    {
        /** @var ApplicantComments\ApplicantProvider $group */
        $group = $this->operationGroup('applicant');

        return $group->updateComment($prompt);
    }
}
