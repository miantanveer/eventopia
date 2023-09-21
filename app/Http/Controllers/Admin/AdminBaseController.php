<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AdminBaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private $data = [];

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }else{
            return $this->data[$property];
        }
    }

    public function __set($property, $value) {
        $this->data[$property] = $value;
    }
}
