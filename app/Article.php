<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes;
    protected $fillable =['titulo','descricao','conteudo','data'];

    protected $dates = ['deleted_at'];
}
