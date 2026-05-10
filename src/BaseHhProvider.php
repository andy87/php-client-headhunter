<?php

declare(strict_types=1);

namespace Andy87\ClientsHh;

use Andy87\PhpClientSdk\Provider\AbstractProvider;

/**
 * Базовый provider для Hh API с ленивым доступом к вложенным группам методов.
 */
abstract class BaseHhProvider extends AbstractProvider
{
    /** @var array<string, class-string<BaseHhProvider>> Карта вложенных групп методов. */
    protected const OPERATION_GROUPS = [];

    /** @var array<string, BaseHhProvider> Созданные вложенные группы методов. */
    private array $operationGroups = [];

    /**
     * Возвращает вложенную группу методов по имени свойства.
     *
     * @param string $name Имя группы.
     *
     * @return BaseHhProvider Вложенная группа методов.
     *
     * @throws \OutOfBoundsException Если группа не зарегистрирована.
     */
    public function __get(string $name): BaseHhProvider
    {
        return $this->operationGroup($name);
    }

    /**
     * Проверяет, зарегистрирована ли вложенная группа методов.
     *
     * @param string $name Имя группы.
     *
     * @return bool true, если группа доступна.
     */
    public function __isset(string $name): bool
    {
        return array_key_exists($name, static::OPERATION_GROUPS);
    }

    /**
     * Возвращает вложенную группу методов по имени.
     *
     * @param string $name Имя группы.
     *
     * @return BaseHhProvider Вложенная группа методов.
     *
     * @throws \OutOfBoundsException Если группа не зарегистрирована.
     */
    public function operationGroup(string $name): BaseHhProvider
    {
        if (isset($this->operationGroups[$name])) {
            return $this->operationGroups[$name];
        }

        $className = static::OPERATION_GROUPS[$name] ?? null;

        if ($className === null) {
            throw new \OutOfBoundsException(sprintf('Hh operation group "%s" is not registered.', $name));
        }

        return $this->operationGroups[$name] = new $className(
            baseUrl: $this->baseUrl,
            authorizationStrategy: $this->authorizationStrategy,
            transport: $this->transport,
            timeout: $this->timeout,
            runtime: $this->runtime,
            options: $this->options,
        );
    }

    /**
     * Возвращает список доступных вложенных групп методов.
     *
     * @return list<string> Имена групп.
     */
    public function operationGroupNames(): array
    {
        return array_keys(static::OPERATION_GROUPS);
    }
}
