<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'content',
        'user_id'
    ];

    protected $date = [
        'deleted_at'
    ];

    public function getByUserId($id) {
        return $this->where('user_id', $id)->get();
    }

    public function getByPost($id) {
        return $this->find($id);
    }

    public function store($input) {
        $input['user_id'] = Auth::id();
        $this->fill($input)->save();
    }
}
