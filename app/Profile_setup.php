<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_setup extends Model
{
        protected $fillable = ['main_id',
                         'clg_name',
                         'year',
                         'stream',
                         'type',
                        'exprience',
                        'jobprofile',
                        'standard_from',
                        'standard_to',
                        'subjects',
                        'board_university',
                        'coaching_options',
                        'facilities_infrastrcture',
                        'website',
                        'facebook',
                        'linkedin',
                        'google',
                        'twitter',
                        'instgram',
                        'youtube',
                        'business_card'];
}
