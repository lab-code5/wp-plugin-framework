<?php namespace Com\CodeFive\Framework\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @see http://getherbert.com
 */
class CommentMeta extends Model {

    /**
     * Disable timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commentmeta';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'meta_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_key', 'meta_value'
    ];

    /**
     * Comment relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment()
    {
        return $this->belongsTo(__NAMESPACE__ . '\Comment', 'comment_id');
    }

}
