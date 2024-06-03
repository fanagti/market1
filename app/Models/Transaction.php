<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded= ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function countCarts(){
        if(Auth::user()){
           return Transaction::where('user_id', Auth::user()->id )->where('status', 'belum lunas')->first()->detailTransaction->count();
        }else{
            return 0;
        };
    }

    public function detailTransaction(): HasMany
    {
        return $this->hasMany(DetailTransaction::class);
    }
}
