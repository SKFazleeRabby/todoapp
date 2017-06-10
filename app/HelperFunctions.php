<?php

use App\Managers\Slug;
use App\Todo;

function slug($title,$id=0){
    $todo = new Todo();
    $slug = new Slug($todo);
    return $slug->createSlug($title,$id);
}