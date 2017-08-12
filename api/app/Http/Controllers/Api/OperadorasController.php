<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Operator;
use Illuminate\Http\Request;

class OperadorasController extends Controller
{
    private $operadoras;

    public function __construct(Operator $operadoras)
    {
        $this->operadoras = $operadoras;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->operadoras->all();
    }
}
