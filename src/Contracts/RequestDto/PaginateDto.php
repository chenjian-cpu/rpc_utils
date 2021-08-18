<?php

declare(strict_types=1);

namespace KkErpService\RpcUtils\Contracts\RequestDto;

class PaginateDto extends AbstractBaseDto
{

    public int $perPage = 10;

}