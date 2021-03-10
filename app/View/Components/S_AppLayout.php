<?php
/**
 * Created by PhpStorm.
 * User: 4459E36
 * Date: 2021/02/23
 * Time: 19:16
 */

namespace App\View\Components;


use Illuminate\View\Component;

class S_AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component
     *
     */
    public function render()
    {
        return view('s_layout.s_app');
    }

}