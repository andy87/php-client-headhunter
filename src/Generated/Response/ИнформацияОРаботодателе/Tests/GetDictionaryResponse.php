<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ИнформацияОРаботодателе\Tests;

use Andy87\ClientsHh\Generated\Response\GetTestsDictionaryResponse as BaseGetTestsDictionaryResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/tests.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-tests-dictionary
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerDictionariesTestItem> $items Response field items
 */
class GetDictionaryResponse extends BaseGetTestsDictionaryResponse
{
}
