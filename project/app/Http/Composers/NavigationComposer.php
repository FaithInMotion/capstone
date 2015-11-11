<?php

namespace App\Http\Composers;

class NavigationComposer
    {
        public function compose($view)
        {
            $view->with('stories', story::take(11)->get());
        }
    }

