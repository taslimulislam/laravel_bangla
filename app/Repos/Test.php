<?php
namespace App\Repos;

use Illuminate\Support\Facades\Facade;

class Test extends Facade{

    protected static function getFacadeAccessor (){

        return 'jogfol';
    }
}
?>