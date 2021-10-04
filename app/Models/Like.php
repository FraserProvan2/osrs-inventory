<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'inventory_id'];
    
    use HasFactory;

    /**
     * Check if user has liked a inventory
     * 
     * @param int $id
     * 
     * @return bool
     */
    static public function userHasLiked($id)
    {
        $check = Like::where('inventory_id', $id)
            ->where('user_id', auth()->id())
            ->first();
        if ($check) return true;
        return false;
    }
}
