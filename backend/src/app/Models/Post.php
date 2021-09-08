<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
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

    protected $with = ['user'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function getByUserId($id) {
        return $this->where('user_id', $id)->get();
    }

    /**
     * 投稿一覧取得
     */
    public function getPosts() {
        return $this->orderBy('updated_at', 'desc')->get();
    }

    /**
     * 投稿取得
     */
    public function getByPost($id) {
        return $this->find($id);
    }

    /**
     * 投稿を登録
     */
    public function store($input) {
        $input['user_id'] = Auth::id();
        $this->fill($input)->save();
    }

    public function getIndexContentAttribute() {
        return mb_strimwidth($this->content, 0, 52, '...', 'utf-8');
    }
}
