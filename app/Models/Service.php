<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\HtmlSpecialCharsCast;
use Mews\Purifier\Casts\CleanHtml;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'logo_image_url',
        'description',
        'order',
    ];

    protected $casts = [
        'title'             => HtmlSpecialCharsCast::class,
        'logo_image_url'    => HtmlSpecialCharsCast::class,
        'description'       => CleanHtml::class,
    ];

    /**
     * User has services
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
