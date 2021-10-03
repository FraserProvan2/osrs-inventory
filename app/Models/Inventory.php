<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'name', 'data'];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Decrease likes amount
     * 
     * @return null
     */
    public function decreaseLikes()
    {
        $this->likes = $this->likes - 1;
        $this->save();
    }

    /**
     * Increase likes amount
     * 
     * @return null
     */
    public function increaseLikes()
    {
        $this->likes = $this->likes + 1;
        $this->save();
    }

    public function gpCostString()
    {
        // TODO work out price
        return [
            'value' => '23',
            'symbol' => 'M'
        ];
    }
}
