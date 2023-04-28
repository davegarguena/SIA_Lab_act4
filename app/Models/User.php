<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'supplier';
// column sa table
protected $fillable = [
'supplier_id', 'supplier_lastname', 'supplier_firstname', 'supplier_phonenumber'
];
}