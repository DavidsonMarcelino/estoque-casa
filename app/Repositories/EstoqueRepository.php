<?php

namespace App\Repositories;

use App\Models\Estoque;
use LaravelAux\BaseRepository;

class EstoqueRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Estoque $model
     */
    public function __construct(Estoque $model)
    {
        parent::__construct($model);
    }
}