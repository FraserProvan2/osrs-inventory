<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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

    /**
     * Appended properties
     *
     * @var array
     */
    protected $appends = ['totalLikes', 'totalInventories'];

    protected static function boot() {
        parent::boot();
    
        static::creating(function ($model) {
            $model->url = substr(md5(rand()), 0, 7);
        });
    }

    /**
     * Get the inventories for the user
     */
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    /**
     * Get the likes for the user
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Calculate total likes
     */
    public function getTotalLikesAttribute()
    {
        $count = 0;
        foreach($this->inventories as $inventory) {
            $count = $count + $inventory->likes;
        }

        return $count;
    }

    /**
     * Calculate total inventories
     */
    public function getTotalInventoriesAttribute()
    {
        return $this->inventories()->count();
    }

    /**
     * Get liked inventories
     */
    public function getLikedInventories()
    {
        $inventories = new Collection();
        foreach($this->likes->pluck('inventory_id') as $id) {
            $inventories[] = Inventory::where('id', $id)->first();
        }

        return $inventories;
    }
}
