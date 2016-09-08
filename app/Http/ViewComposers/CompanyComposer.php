<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class CompanyComposer
{
    /**
     * 绑定数据到视图.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->share('success', 'success');
    }
}

