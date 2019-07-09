<?php

namespace App\Http\Controllers\Api;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;

class ItemsController extends Controller
{
	private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function store(ItemRequest $request)
    {
		$itemData = $request->all();
    	
        $this->item->create($itemData);

    	return response()->json([
            'msg' => 'Item information successfully added',
            'code' => '201 - Created'
        ]);	
    }
}
