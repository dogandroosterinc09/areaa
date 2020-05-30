<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Benefits;
use App\Http\Controllers\Controller;

class BenefitsController extends Controller
{
    /**
     * Benefits model instance.
     *
     * @var Benefits
     */
    private $benefit;

    /**
     * Create a new controller instance.
     *
     * @param Benefits $benefit
     */
    public function __construct(Benefits $benefit)
    {
        $this->benefit = $benefit;
    }

    public function getBenefit(Request $request) {

        return json_encode($this->benefit->find($request->id));
        
    }
}