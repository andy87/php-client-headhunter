<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerAddresses\Employer;

use and_y87\ClientsHh\Generated\Prompt\GetEmployerAddressesPrompt as BaseGetEmployerAddressesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/addresses.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-addresses
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string|null $changed_after Позволяет загрузить все адреса, изменённые после этой даты (добавление, удаление или изменение адреса). Изменения возвращаются без пагинации. Значение указывается в формате [ISO 8601](#date-format) - `YYYY-MM-DDThh:mm:ss` или c указанием отступа для часового пояса `YYYY-MM-DDThh:mm:ss±hhmm`. Максимальное значение отступа от текущей даты - 7 дней. При передаче этого параметра, для каждого адреса в теле ответа возвращается поле `deleted`, указывающее на то, удалён ли адрес. Также, в случае передачи этого параметра, игнорируются все остальные
 * @property string|null $manager_id Идентификатор менеджера создавшего адрес
 * @property bool|null $with_manager Если true, ответ будет содержать информацию о менеджере создавшем адрес
 * @property int|null $per_page Количество элементов на странице выдачи. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). Значение по умолчанию и максимальное значение per_page составляет 10000
 * @property int|null $page Порядковый номер страницы в выдаче. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). По умолчанию нумерация начинается с 0 страницы
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetAddressesPrompt extends BaseGetEmployerAddressesPrompt
{
}
