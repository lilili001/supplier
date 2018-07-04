<?php

namespace Modules\Supplier\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class SupplierListComposer
{
    public function compose(View $view)
    {
        $list = DB::table('supplier')->get();
        $view->with('suppliers',$list);
    }
}
