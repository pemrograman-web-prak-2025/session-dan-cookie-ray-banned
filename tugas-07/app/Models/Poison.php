<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Poison extends Model {
    protected $table = 'poisons';
    protected $primaryKey = 'poison_id';
    public $timestamps = false;
    protected $fillable = [
        'poison_name',
        'poison_img',
        'poison_desc'
    ];
}
?>