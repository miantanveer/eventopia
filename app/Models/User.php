<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone_number',
        'password',
        'status',
        'image',
        'email_verified_at',
        'phone_number_verified_at',
        'otp',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($user) {
            if ($user->isDirty('password')) {
                $user->password = Hash::make($user->password); // Hash the password
            }
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function spaces(){
        return $this->hasMany(Space::class);
    }

    public function amenities(){
        return $this->hasMany(SpaceAmenity::class);
    }

    function cart()
    {
        return $this->hasMany(Cart::class);
    }

    function accounts()
    {
        return $this->hasMany(BankAccount::class);
    }
}
