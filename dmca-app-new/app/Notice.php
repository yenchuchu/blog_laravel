<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notices';

    protected $fillable = [
        'provider_id',
        'infringing_title',
        'infringing_link',
        'original_link',
        'original_description',
        'template',
        'content_removed'
    ];

    public function recipient()
    {
        return $this->belongsTo('App\provider', 'provider_id');
    }

    public function getRecipientEmail()
    {

        return $this->recipient->copyright_email;
    }

    public function getOwnerEmail()
    {
        return $this->user->email;
    }

//    public static function open(array $attributes)
//    {
//
//        return new static($attributes);
//    }
//
//    public function useTemplate($template)
//    {
//        $this->template = $template;
//
//        return $this;
//    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
