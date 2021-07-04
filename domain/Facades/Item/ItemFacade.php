<?php

namespace domain\Facades\Item;

use domain\Services\Item\ItemService;
use Illuminate\Support\Facades\Facade;

/**
 * Item Facade
 * 
 * php version 8
 *
 * @category Facade
 * @author   Okto Zone <janithsandaruwan29@gmail.com>
 * 
 * */
class ItemFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ItemService::class;
    }
}
