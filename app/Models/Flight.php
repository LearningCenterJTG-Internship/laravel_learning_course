<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     * @var bool
     */
    protected $table = 'my_flights';
    
    use \Illuminate\Database\Eloquent\Concerns\HasUuids;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    protected $attributes = [
        'status' => '[]',
        'delayed' => false,
    ];

    
    

	

	/**
	 * @return mixed
	 */
	public function getKeyType() {
		return $this->keyType;
	}
	
	/**
	 * @param mixed $keyType 
	 * @return self
	 */
	public function setKeyType($keyType): self {
		$this->keyType = $keyType;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDateFormat() {
		return $this->dateFormat;
	}
	
	/**
	 * @param mixed $dateFormat 
	 * @return self
	 */
	public function setDateFormat($dateFormat): self {
		$this->dateFormat = $dateFormat;
		return $this;
	}
}
