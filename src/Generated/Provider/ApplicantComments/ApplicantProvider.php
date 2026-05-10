<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ApplicantComments;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\AddApplicantCommentPrompt;
use Andy87\ClientsHh\Generated\Prompt\DeleteApplicantCommentPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetApplicantCommentsListPrompt;
use Andy87\ClientsHh\Generated\Prompt\UpdateApplicantCommentPrompt;
use Andy87\ClientsHh\Generated\Response\ApplicantComments\Applicant\AddCommentResponse;
use Andy87\ClientsHh\Generated\Response\ApplicantComments\Applicant\DeleteCommentResponse;
use Andy87\ClientsHh\Generated\Response\ApplicantComments\Applicant\GetCommentsListResponse;
use Andy87\ClientsHh\Generated\Response\ApplicantComments\Applicant\UpdateCommentResponse;

/**
 * Группа методов "applicant" раздела HeadHunter API "Комментарии к соискателю".
 */
class ApplicantProvider extends BaseHhProvider
{
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
     * @return AddCommentResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addComment(AddApplicantCommentPrompt $prompt): AddCommentResponse
    {
        /** @var AddCommentResponse $response */
        $response = $this->request($prompt, AddCommentResponse::class);

        return $response;
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
     * @return DeleteCommentResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteComment(DeleteApplicantCommentPrompt $prompt): DeleteCommentResponse
    {
        /** @var DeleteCommentResponse $response */
        $response = $this->request($prompt, DeleteCommentResponse::class);

        return $response;
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
     * @return GetCommentsListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCommentsList(GetApplicantCommentsListPrompt $prompt): GetCommentsListResponse
    {
        /** @var GetCommentsListResponse $response */
        $response = $this->request($prompt, GetCommentsListResponse::class);

        return $response;
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
     * @return UpdateCommentResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function updateComment(UpdateApplicantCommentPrompt $prompt): UpdateCommentResponse
    {
        /** @var UpdateCommentResponse $response */
        $response = $this->request($prompt, UpdateCommentResponse::class);

        return $response;
    }
}
