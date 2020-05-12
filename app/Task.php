<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function get_task() {
        $ret = $this->get();
        return $ret;
    }
    
    // 修正：user_id を追加
    protected $fillable = ['name', 'detail', 'deadline', 'user_id'];
    
    public function get_task_by_id($id)
    {
        return $this->where('id', $id)->first();
    }
    
    // 追加：ミューテタ
    public function setNameAttribute($value)
    {
        if ( ! preg_match('/^【Task】/', $value) ) {
            $this->attributes['name'] = '【Task】' . $value;
        } else {
            $this->attributes['name'] = $value;
        }
    }
    
    // 追加：アクセサ
    public function getDeadlineAttribute($value)
    {
        return date('Y-m-d',  strtotime($value));
    }
}
