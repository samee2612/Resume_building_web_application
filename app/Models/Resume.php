<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    public $table = "resume";
    protected $casts=[
        'choice'=>'array', 
        'lang'=>'array'
    ];

    protected $fillable=['name',
    'city',
    'email',
    'tel',
    'git',
    'linked',
    'aboutme',
    'user_image',
    'edu1',
    'institute',
    'uni',
    'cgpa',
    'year',

   
    'domain1',
    'sem',
    'proj',
    'des',

    //Internship
    'domain',
    'duration',
    'role',
    'elab',

    //Technical skills
    'choice',//for array 
    
    //Languages
    'lang',//for array 

    //Template
    'temp',
    
    
  


   ];
  
}
