<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title'];

    public function expenses(){
        return $this->hasMany(related: Expense::class);
    }
}
