<?php

namespace App\Http\Controllers\Api;

use App\Models\Estoque;
use App\Services\EstoqueService;
use App\Http\Requests\EstoqueRequest;
use LaravelAux\BaseController;

class EstoqueController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param EstoqueService $service
     * @param EstoqueRequest $request
     */
    public function __construct(EstoqueService $service)
    {
        parent::__construct($service, new EstoqueRequest);
    }

 
    public function adiciona($id)
    {
        return Estoque::where('id', $id)->increment('quantidade', 1);
    }

    public function retira($id)
    {
        return Estoque::where('id', $id)->increment('quantidade', -1);
    }
}