<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $sectionID
 * @property string $section_name
 * @property string $section_desc
 * @property string $created_at
 * @property string $updated_at
 * @property Archivebox[] $archiveboxs
 * @property Folder[] $folders
 */
class Section extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sectionID';

    /**
     * @var array
     */
    protected $fillable = ['section_name', 'section_desc', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archiveboxs()
    {
        return $this->hasMany('App\Models\Archivebox', 'sectionID', 'sectionID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function folders()
    {
        return $this->hasMany('App\Models\Folder', 'sectionID', 'sectionID');
    }
}
