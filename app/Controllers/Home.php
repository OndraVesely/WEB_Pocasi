<?php
 
namespace App\Controllers;
 
use App\Models\Bundesland;
 
class Home extends BaseController
{
    public function index()
    {
        $model = new Bundesland();
 
        $seznamZemi = $model
            ->orderBy('name', 'asc') ->findAll();
 
        var_dump($seznamZemi);
    }
}