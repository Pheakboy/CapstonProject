<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{
    // Define the table associated with this model
    protected $table = 'categories';

    // Define the primary key column name if different from "id"
    protected $primaryKey = 'category_id';

    // Define the fillable attributes (columns) of the model
    protected $fillable = [
        'category_name',
        // Add other fillable columns here
    ];
    use HasFactory;

    // Define relationships or other methods here
    // ...
}
