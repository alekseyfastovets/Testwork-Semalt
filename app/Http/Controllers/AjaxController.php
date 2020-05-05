<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bid;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller {
    public function index(Request $request){
        $query_type = $request->get('query_type');
        $data = '';
        $maxCount = 0;
        $bidsCount = '';
        switch($query_type)
        {
            case 1:
                $data = DB::table('bids')
                ->select('id', 'price', 'name')
                ->where('price','=',DB::table('bids')->max('price'))
                ->get();
                break;

            case 2:
                $data = DB::table('events')
                 ->leftJoin('bids','events.id','=','bids.id_event')
                 ->select('events.id','events.caption','bids.id_event')
                 ->whereNull('bids.id_event')->distinct()
                 ->select('events.caption as caption')->get();
                break;
            case 3:
                $data = DB::table('events')
                ->leftJoin('bids','events.id','=','bids.id_event')
                    ->whereNotNull('bids.id_event')
                    ->select('events.id','events.caption','bids.id_event')
                ->groupBy('events.caption')->havingRaw('count(bids.id_event) > 3')->get();
                break;
            case 4:
                $bidsCount = DB::table('bids')->selectRaw('id_event, count(id) as count_bids')->groupBy('id_event')->get();

                $data = DB::select(
                     'select ev.caption as caption, count(bd.id) as count_bids from bids bd
                            left join events as ev on ev.id = bd.id_event
                            group by id_event
                            Having
                            count(bd.id) = (select
                            max(bds.ids) as max_bids
                            from (select id_event, count(id) as ids from bids group by id_event) as bds)
                            ');
        }
        return response()->json($data, 200);



    }
}
