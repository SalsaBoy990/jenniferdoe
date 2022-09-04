<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\HtmlSpecialCharsCast;
use Mews\Purifier\Casts\CleanHtml;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'seo_title',
        'subtitle',
        'description',
        'seo_description',
        'email_address',
        'phone_number',
        'profile_image_url',
        'seo_image_url',
        'location',
        'facebook_link',
        'youtube_link'
    ];

    protected $casts = [
        'title'             => HtmlSpecialCharsCast::class,
        'seo_title'         => HtmlSpecialCharsCast::class,
        'subtitle'          => HtmlSpecialCharsCast::class,
        'description'       => CleanHtml::class,
        'seo_description'   => HtmlSpecialCharsCast::class,
        'email_address'     => HtmlSpecialCharsCast::class,
        'phone_number'      => HtmlSpecialCharsCast::class,
        'profile_image_url' => HtmlSpecialCharsCast::class,
        'seo_image_url'     => HtmlSpecialCharsCast::class,
        'location'          => HtmlSpecialCharsCast::class,
        'facebook_link'     => HtmlSpecialCharsCast::class,
        'youtube_link'      => HtmlSpecialCharsCast::class,
    ];

    /**
     * User has meta
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Accessor for the user's phone number formatted as link
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function getPhoneNumberLinkAttribute()
    {
        $illegal = array('/', '+', '-', ' ');
        $phone = str_replace($illegal, '', $this->phone_number);
        return $phone;
    }
}
