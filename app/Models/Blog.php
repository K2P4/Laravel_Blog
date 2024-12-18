<?php 

    namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

    class Blog
    
    {   
            public $title;
            public $slug;
            public $intro;
            public $body;
            public $date;
            


            public function __construct($title,$slug,$intro,$body,$date)
            {
                $this->title = $title;
                $this->slug = $slug;
                $this->intro = $intro;
                $this->body = $body;
                $this->date = $date;
            }



          public static function all () {

            
            $files= File::files(resource_path("blogs"));
            return collect($files)->map(function($file){
                $obj=YamlFrontMatter::parseFile($file);
                return new Blog($obj->title,$obj->slug,$obj->intro,$obj->body(),$obj->date);

            })->sortByDesc('date');

            // return array_map(function($file)
            // {
            //     $obj=YamlFrontMatter::parseFile($file);
            //     return new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
                
            // }
            // ,$files)


        }
        public static function findorFail($slug) 
        {
        //     $path =resource_path("blogs/$slug.html");
        //         if(!file_exists($path))
        //     {
                
        //         return redirect('/');
        //     }

        //     return cache()->remember("posts.$slug",120,function() use($path)
        //     {
        //         return file_get_contents($path );
        //     }
        // );

        $blogs = static::all()->firstWhere('slug',$slug);

        if(!$blogs)
        {
            return abort('404');
        }
        return $blogs;

        }


      

    }

