<?php

namespace APY\DataGridBundle\Grid\Exception;

/**
 * Class ColumnAlreadyExistsException.
 *
 * @author  Quentin Ferrer
 */
class ColumnAlreadyExistsException extends \InvalidArgumentException
{
    public function __construct(string $name)
    {
        parent::__construct(sprintf('The type of column "%s" already exists.', $name));
    }
}
