<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [POST] /applicant_comments/{applicant_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/add-applicant-comment
 */
class AddApplicantCommentResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['access_type' => 'access_type', 'author' => 'author', 'created_at' => 'created_at', 'id' => 'id', 'is_mine' => 'is_mine', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['author', 'created_at', 'id', 'is_mine', 'text', 'access_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['access_type' => \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAccessType::class, 'author' => \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAuthor::class];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsApplicantCommentItem::class;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAccessType Тип доступа для комментария. Возможные значения перечислены [в справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `applicant_comment_access_type` */
    public \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAccessType $access_type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAuthor Автор комментария */
    public \Andy87\ClientsHh\Generated\Schema\Common\ApplicantCommentsAuthor $author;

    /** @var string Дата создания комментария */
    public string $created_at;

    /** @var string Уникальный идентификатор комментария */
    public string $id;

    /** @var bool Комментарий написан текущим пользователем? */
    public bool $is_mine;

    /** @var string Текст комментария. Может содержать символы новой строки */
    public string $text;
}
