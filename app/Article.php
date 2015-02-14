<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'articles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'body', 'level','tag','user_id','published_at'];

    public function getDates()
    {
        return ['created_at','updated_at','published_at'];
    }


}
