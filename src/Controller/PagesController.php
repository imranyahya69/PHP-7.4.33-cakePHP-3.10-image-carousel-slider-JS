<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{
    public function landing()
    {
        // You can pass images or other data to the view if needed
        $this->viewBuilder()->setLayout('default'); // Optional
    }
}
