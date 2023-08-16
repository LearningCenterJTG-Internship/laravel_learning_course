<?php
 
namespace App\Models;
 
use App\Models\Scopes\AncientScope;
use Illuminate\Database\Eloquent\Model;
 
class User extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new AncientScope);
    }
}