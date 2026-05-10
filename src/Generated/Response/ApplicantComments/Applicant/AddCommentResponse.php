<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ApplicantComments\Applicant;

use Andy87\ClientsHh\Generated\Response\AddApplicantCommentResponse as BaseAddApplicantCommentResponse;

/**
 * Ответ HeadHunter API [POST] /applicant_comments/{applicant_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/add-applicant-comment
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAccessType $access_type Тип доступа для комментария. Возможные значения перечислены [в справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `applicant_comment_access_type`
 * @property \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAuthor $author Автор комментария
 * @property string $created_at Дата создания комментария
 * @property string $id Уникальный идентификатор комментария
 * @property bool $is_mine Комментарий написан текущим пользователем?
 * @property string $text Текст комментария. Может содержать символы новой строки
 */
class AddCommentResponse extends BaseAddApplicantCommentResponse
{
}
