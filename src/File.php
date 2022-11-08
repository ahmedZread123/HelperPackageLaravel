<?php 

namespace src ; 

Trait File 
{
  
    
    /**README.md
     * Save Images
     *
     * @param [string] $name
     * @param [string] $path
     * @return string
     */

    public function saveImage($name , $path){
        $ImageExtenstion = $name->getClientOriginalExtension();
        $ImageName = time().rand().'.'.$ImageExtenstion;
        $name->move($path,$ImageName);
        return $ImageName;
    }

    /**
     * Save Videos
     *
     * @param [string] $name
     * @param [string] $path
     * @return string
     */
    public function save_videos($name , $path){
        $filename = time().rand().'.'.$name->getClientOriginalName();
        $name->move(public_path($path), $filename);
        return $filename ;
    }



}