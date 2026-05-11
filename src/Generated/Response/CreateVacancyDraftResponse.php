<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [POST] /vacancies/drafts.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/create-vacancy-draft
 */
class CreateVacancyDraftResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['id' => 'id', 'ignored_fields' => 'ignored_fields', 'name' => 'name', 'publication_ready' => 'publication_ready', 'validation_errors' => 'validation_errors'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'publication_ready'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['validation_errors' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDraftVacancyError::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDraftResponseSchema::class;

    /** @var string Идентификатор созданного объекта */
    public string $id;

    /** @var array<int, string>|null Поля, которые не были сохранены при создании черновика, вследствие не верного заполнения */
    public ?array $ignored_fields = null;

    /** @var string Заголовок черновика */
    public string $name;

    /** @var bool Готовность черновика к публикации */
    public bool $publication_ready;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDraftVacancyError>|null Поля, которые были сохранены при создании черновика, с соответствующими ошибками, которые необходимо поправить для успешной публикации вакансии на основе черновика */
    public ?array $validation_errors = null;
}
