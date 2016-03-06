<?php namespace RCAlmeida\AB\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Goal extends Eloquent {

    protected $primaryKey = 'name';

    protected $fillable = ['name', 'experiment', 'count'];

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        // Set the connection based on the config.
        $this->connection = Config::get('ab::connection');
    }

    public function scopeActive($query)
    {
        $experimentGroups = Config::get('ab', [])['experiments'];

        if ($experimentGroups)
        {
            $experiments = [];

            foreach($experimentGroups as $group){
                foreach($group as $experiment) {
                    $experiments[] = $experiment;
                }
            }

            return $query->whereIn('experiment', $experiments);
        }

        return $query;
    }

}
