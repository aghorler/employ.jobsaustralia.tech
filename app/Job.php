<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'title', 'description', 'term', 'hours', 'salary', 'rate', 'startdate', 'state', 'city', 'java', 'python', 'c', 'csharp', 'cplus', 'php', 'html', 'css', 'javascript', 'sql', 'unix', 'winserver', 'windesktop', 'linuxdesktop', 'macosdesktop', 'pearl', 'bash', 'batch', 'cisco', 'office', 'r', 'go', 'ruby', 'asp', 'scala', 'cow', 'mineducation', 'minexperience', 'rankone', 'ranktwo', 'rankthree', 'employerid'];

    protected $table = 'jobs';

    protected $primaryKey = 'id';

    public $incrementing = false;
}
