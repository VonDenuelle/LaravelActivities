<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function album(){
        $title = 'Album';
    
        $images =  array(
            "https://i2.wp.com/laptopmedia.com/wp-content/uploads/2020/07/internals.jpg?ssl=1",
             "https://www.lenovo.com/medias/cap-lenovo-laptop-legion-5-15-amd-subseries-feature-5-legion-ai-engine.jpg?context=bWFzdGVyfHJvb3R8MjA5MDYzfGltYWdlL2pwZWd8aDBjL2g5ZS8xMjEwMjE0MzczNzg4Ni5qcGd8ODZmMmIyNjgxYzg0ZjA3ZTQ2ZGJlODIwNDdlMWI3ODcxNTNmNTQ2OWEzNjk5MGY3ZmZmZWY5ZDc1MzViMTUwZQ&w=1920", 
             "https://www.lenovo.com/medias/lenovo-laptop-legion-5-15-amd-subseries-feature-4-thermal-control.jpg?context=bWFzdGVyfHJvb3R8ODk0NDY0fGltYWdlL2pwZWd8aDA4L2g3Ni8xMTUzNzg5OTEyNjgxNC5qcGd8YTFjNjYxYWFjMzEyNDc0MzI0ZmViZjJlMTk2ZTFiZjc4YzE4Y2Q5ODA1YzNhYTJjZmE2MGI0MzllNTJlMzBmOA&w=1920",
             "https://www.lenovo.com/medias/lenovo-laptop-legion-5-15-amd-subseries-feature-7-pinpoint-precision.jpg?context=bWFzdGVyfHJvb3R8MzA0MzQ4fGltYWdlL2pwZWd8aDJhL2hiOC8xMTUzNzg5OTMyMzQyMi5qcGd8NTE5YzAxMzg1ODdlMDc2OGNlYThiY2I5Zjc0YTIwZmQ1NTkzOGE2OTE3MmExMjY5M2IwMmVmODExMjViNjA2Yw&w=1920",
             "https://i0.wp.com/www.tech-critter.com/wp-content/uploads/2020/08/Lenovo-Legion-5-15-3.jpg",
             "https://static.techspot.com/articles-info/2405/images/2022-02-06-image.jpg",
             "https://www.ultrabookreview.com/wp-content/uploads/2021/07/lenovo-legion5-main.jpg",
             "https://www.lenovo.com/medias/lenovo-laptop-legion-5-15-amd-subseries-feature-1-uncompromised-battery.jpg?context=bWFzdGVyfHJvb3R8MTg4ODMyfGltYWdlL2pwZWd8aGFhL2gxYi8xMTUzNzg5ODYzNTI5NC5qcGd8ZWIzNTFjYWUzYWI4NDc1OTJhOTliYjFjOGI3YTg1NDJiZDM2NDFmOGZhYjRhNThiMWQwYzNmMTM5ZjY3OTA4MQ&w=1920",
             "https://www.lenovo.com/medias/lenovo-laptop-legion-5-15-amd-subseries-feature-2-ultimate-performance.jpg?context=bWFzdGVyfHJvb3R8MjU2MDA4fGltYWdlL2pwZWd8aGU2L2hjMy8xMTUzNzg5ODgzMTkwMi5qcGd8MDI3MzRiZGVhMDRhOTQyNmFlMWNmNmUxZWU2NTU5NWQzZGRmYTA1NDhhNDExNjM2YjgyMjYyOWRhNmMxZDczMg&w=1920"

            );
            
        return view('album', compact('title','images'));
    }

}