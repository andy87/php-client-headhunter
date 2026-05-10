<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\МенеджерыРаботодателя\Employer;

use Andy87\ClientsHh\Generated\Response\GetEmployerManagersResponse as BaseGetEmployerManagersResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-managers
 *
 * @property int $found Response field found
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersEmployerManagerItem> $items Response field items
 * @property int $page Response field page
 * @property int $pages Response field pages
 * @property int $per_page Response field per_page
 */
class GetManagersResponse extends BaseGetEmployerManagersResponse
{
}
