<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ApplicantComments\Applicant;

use Andy87\ClientsHh\Generated\Prompt\UpdateApplicantCommentPrompt as BaseUpdateApplicantCommentPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /applicant_comments/{applicant_id}/{comment_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/update-applicant-comment
 *
 * @property string $applicant_id Идентификатор соискателя, который можно узнать из поля `owner` [в резюме](#tag/Prosmotr-rezyume/operation/get-resume)
 * @property string $comment_id Идентификатор комментария, который можно узнать в [списке комментариев](#tag/Kommentarii-k-soiskatelyu/operation/get-applicant-comments-list)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string|null $text Текст комментария
 * @property string|null $access_type Тип доступа. Доступные значения перечислены [в справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `applicant_comment_access_type`
 */
class UpdateCommentPrompt extends BaseUpdateApplicantCommentPrompt
{
}
