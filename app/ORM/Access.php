<?php namespace App\ORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Access extends Model
{
    use SoftDeletes;

    protected $table = 'accesses';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function links()
    {
        return $this->belongsTo('App\ORM\Link');
    }
}
