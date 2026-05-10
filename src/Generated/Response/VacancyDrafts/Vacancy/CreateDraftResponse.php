<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy;

use Andy87\ClientsHh\Generated\Response\CreateVacancyDraftResponse as BaseCreateVacancyDraftResponse;

/**
 * Ответ HeadHunter API [POST] /vacancies/drafts.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/create-vacancy-draft
 *
 * @property string $id Идентификатор созданного объекта
 * @property array<int, string>|null $ignored_fields Поля, которые не были сохранены при создании черновика, вследствие не верного заполнения
 * @property string $name Заголовок черновика
 * @property bool $publication_ready Готовность черновика к публикации
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftDraftVacancyError>|null $validation_errors Поля, которые были сохранены при создании черновика, с соответствующими ошибками, которые необходимо поправить для успешной публикации вакансии на основе черновика
 */
class CreateDraftResponse extends BaseCreateVacancyDraftResponse
{
}
