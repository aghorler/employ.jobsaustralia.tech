<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'title', 'sector', 'experience', 'state', 'city', 'java', 'python', 'c', 'csharp', 'cplus', 'php', 'html', 'css', 'javascript', 'sql', 'unix', 'winserver', 'windesktop', 'linuxdesktop', 'macosdesktop', 'pearl', 'bash', 'batch', 'cisco', 'office', 'r', 'go', 'ruby', 'asp', 'scala'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';
}
