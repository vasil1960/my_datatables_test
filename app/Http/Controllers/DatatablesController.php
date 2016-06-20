<?php

namespace App\Http\Controllers;

use App\Signal;
use Illuminate\Http\Request;

use App\Http\Requests;

use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    //
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Signal::query())->make(true);
    }
}
