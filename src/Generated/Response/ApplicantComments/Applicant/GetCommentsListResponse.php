<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ApplicantComments\Applicant;

use Andy87\ClientsHh\Generated\Response\GetApplicantCommentsListResponse as BaseGetApplicantCommentsListResponse;

/**
 * Ответ HeadHunter API [GET] /applicant_comments/{applicant_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-applicant-comments-list
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsApplicantCommentItem> $items Список комментариев
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 */
class GetCommentsListResponse extends BaseGetApplicantCommentsListResponse
{
}
