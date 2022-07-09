<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use DB;

class PostController extends Controller
{
    public function index(){
        $this->koreatimes();
        $this->asiawomen();
        $this->skynews();
        $posts = DB::select('select * from posts where image != ""');
        return view('post',['posts'=>$posts]);
    }

    public function koreatimes()
    {  
        $xml = simplexml_load_file("https://www.koreatimes.co.kr/www/rss/nation.xml");
        $i = 0;
        foreach ($xml->channel->item as $data) if ($i < 10){
            $values = array('id' => 0, 'title' => $data->title, 'link' => $data->link, 'image' => $data->enclosure['url'], 'description' => $data->description);
            DB::table('posts')->insert($values);     
            $i += 1;
        }
    }

    public function asiawomen()
    {  
        $xml = simplexml_load_file("https://news.un.org/feed/subscribe/en/news/topic/women/feed/rss.xml");
       
        $i = 0;
        foreach ($xml->channel->item as $data) if ($i < 10){
            $values = array('id' => 0, 'title' => $data->title, 'link' => $data->link, 'image' => $data->img, 'description' => $data->description);       
            DB::table('posts')->insert($values);
            $i += 1;
        }
    }

    public function skynews()
    {  
        $xml = simplexml_load_file("https://feeds.skynews.com/feeds/rss/uk.xml");
        $i = 0;
        foreach ($xml->channel->item as $data) if ($i < 10){
            $values = array('id' => 0, 'title' => $data->title, 'link' => $data->link, 'image' => $data->enclosure['url'], 'description' => $data->description);
            DB::table('posts')->insert($values);     
            $i += 1;
        }
    }
    
}