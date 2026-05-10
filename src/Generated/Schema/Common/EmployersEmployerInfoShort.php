<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersEmployerInfoShort.
 */
class EmployersEmployerInfoShort extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'id' => 'id', 'logo_urls' => 'logo_urls', 'name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'url', 'alternate_url'];

    protected const NULLABLE_FIELDS = ['logo_urls'];

    protected const CASTS = [];

    /** @var string Ссылка на описание работодателя на сайте */
    public string $alternate_url;

    /** @var string Идентификатор работодателя */
    public string $id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls|null Ссылки на изображения логотипов работодателя разных размеров. `original` — это необработанный логотип, который может быть большого размера. Если изначально загруженный компанией логотип меньше, чем 240px и/или 90px по меньшей стороне, то в соответствующих ключах будут ссылки на изображения оригинального размера. Объект может быть `null`, если компания не загрузила логотип. Клиент должен предусмотреть возможность отсутствия логотипа по указанной ссылке (ответ с кодом `404 Not Found`). Логотипы 90 и 240 присутствуют не во всех компаниях */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls $logo_urls = null;

    /** @var string Название работодателя */
    public string $name;

    /** @var string URL для получения полного описания работодателя */
    public string $url;
}
