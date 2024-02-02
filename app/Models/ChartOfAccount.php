<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{
    //Attributes for table
    protected $fillable = [
        'account_code',
        'account_name',
        'account_type',
        'normal_balance',
    ];
}
