<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy;

use and_y87\ClientsHh\Generated\Response\ChangeVacancyDraftResponse as BaseChangeVacancyDraftResponse;

/**
 * Ответ HeadHunter API [PUT] /vacancies/drafts/{draft_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/change-vacancy-draft
 *
 * @property string $id Идентификатор созданного объекта
 * @property array<int, string>|null $ignored_fields Поля, которые не были сохранены при создании черновика, вследствие не верного заполнения
 * @property string $name Заголовок черновика
 * @property bool $publication_ready Готовность черновика к публикации
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDraftVacancyError>|null $validation_errors Поля, которые были сохранены при создании черновика, с соответствующими ошибками, которые необходимо поправить для успешной публикации вакансии на основе черновика
 */
class ChangeDraftResponse extends BaseChangeVacancyDraftResponse
{
}
