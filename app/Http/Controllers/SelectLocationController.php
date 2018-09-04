<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.09.18
 * Time: 16:59
 */

namespace App\Http\Controllers;

use App\Http\Requests\SelectLocationRequest;
use App\Models\Location;
use Illuminate\Database\Eloquent\Collection;


class SelectLocationController extends Controller
{
    protected $locationModel;

    /**
     * SelectLocationController constructor.
     * @param Location $location
     */
    public function __construct(Location $location)
    {
        $this->locationModel = $location;
    }

    /**
     * @param SelectLocationRequest $request
     * @return mixed
     */
    public function getArea(SelectLocationRequest $request): Collection
    {
        $regionId = $request->regionId;
        $data = $this->locationModel->where('ter_pid', $regionId)->get();

        return $data;
    }
}