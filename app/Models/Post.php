<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // desde el modelo enviamos a index.blade 
    //{$post->excerpt , primera letra en mayuscula
    // se le agrega get + Excerpt + Atribute
    public function getExcerptAttribute()
    {
        // toma los 120 primeros caracteres del campo contenido
        return substr($this->content,0,120);

    }
    //{$post->published_at} , primera letra en mayuscula de ambas separaciones
    // se le agrega get + PublishedAt + Atribute
    public function getPublishedAtAttribute()
    {
        // da fomato de fecha legible
        return $this->created_at->format('d/m/Y');
        
    }

}
