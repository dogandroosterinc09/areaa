<?php

namespace App\Models;

use App\Http\Traits\Attachments\HasAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Event extends Model
{
    use SoftDeletes, HasAttachment;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'description',
        'starts_at',
        'ends_at',
        'time',
        'location_name',
        'city',
        'state',
        'zip',
        'country',
        'longitude',
        'latitude',
        'amount',
        'amount_member',
    ];

    /**
     * the attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['starts_at', 'ends_at'];

    public function getUrlAttribute() {
        $route = "event.show";

        return route($route, $this->attributes['slug']);
    }

    public function getLocationAddressAttribute() {
        $city = $this->attributes['city'];
        $state = $this->attributes['state'];
        $zip = $this->attributes['zip'];
        $country = $this->attributes['country'];

        return "$city, $state $zip $country";
    }

    public function getStartMonthAttribute() {
        return \Carbon\Carbon::parse($this->attributes['starts_at'])->format('M');
    }

    public function getStartDayAttribute() {
        return \Carbon\Carbon::parse($this->attributes['starts_at'])->format('d');
    }

    public function getEndDayAttribute() {
        return \Carbon\Carbon::parse($this->attributes['ends_at'])->format('d');
    }

    public function getDateRangeAttribute() {
        $startDate = $this->attributes['starts_at'];
        $endDate = $this->attributes['ends_at'];

        $startMonth = Carbon::parse($startDate)->format('F');
        $startDay = ' ' . Carbon::parse($startDate)->format('d');
        $startYear = Carbon::parse($startDate)->format('Y') !== Carbon::parse($endDate)->format('Y') ? ', ' . Carbon::parse($startDate)->format('Y') : '';
        $endMonth = Carbon::parse($startDate)->format('F Y') !== Carbon::parse($endDate)->format('F Y') ? Carbon::parse($endDate)->format('F') : '';
        $endDay = ' ' . Carbon::parse($endDate)->format('d');
        $endYear = ', ' . Carbon::parse($endDate)->format('Y');

        return "$startMonth$startDay$startYear - $endMonth$endDay$endYear";
    }
}