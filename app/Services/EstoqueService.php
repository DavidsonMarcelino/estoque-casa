<?php

namespace App\Services;

use App\Repositories\EstoqueRepository;
use LaravelAux\BaseService;

class EstoqueService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param EstoqueRepository $repository
     */
    public function __construct(EstoqueRepository $repository)
    {
        parent::__construct($repository);
    }
}