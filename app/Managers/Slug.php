<?php

namespace App\Managers;


use App\Todo;

class Slug
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function createSlug($title,$id=0){
        $slug = str_slug($title);
        $allSlug = $this->getSlug($slug,$id);

        if(!$allSlug->contains('slug',$slug)){
            return $slug;
        }

        for($i=1; $i<30; $i++){
            $newSlug = $slug . '-' . $i ;
            if(! $allSlug->contains('slug',$newSlug)){
                return $newSlug;
            }
        }
    }

    private function getSlug($slug,$id){
        return Todo::select('slug')->where('slug','like',$slug . '%')
            ->where('id','<>',$id)->get();
    }
}