<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\HtmlSpecialCharsCast;
use Mews\Purifier\Casts\CleanHtml;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'description',
        'order',
    ];

    protected $casts = [
        'date'             => HtmlSpecialCharsCast::class,
        'description'       => CleanHtml::class,
    ];

    /**
     * User has qualifications
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
