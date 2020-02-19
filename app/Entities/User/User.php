<?php

namespace App\Entities\User;

use App\Entities\Apartments\Apartment;
use App\Entities\Apartments\ApartmentView;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Thomasjohnkane\Snooze\Traits\SnoozeNotifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SnoozeNotifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug',
        'reg_number', 'twitter', 'facebook',
        'instagram', 'coins'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'password', 'remember_token',
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function requestapartmentsview()
    {
        return $this->hasMany(ApartmentView::class);
    }

    // Schedule a birthday notification
//    $user->notifyAt(new BirthdayNotification, Carbon::parse($user->birthday));
//
//    // Schedule for a week from now
//    $user->notifyAt(new NextWeekNotification, Carbon::now()->addDays(7));
//
//    // Schedule for new years eve
//    $user->notifyAt(new NewYearNotification, Carbon::parse('last day of this year'));
}
