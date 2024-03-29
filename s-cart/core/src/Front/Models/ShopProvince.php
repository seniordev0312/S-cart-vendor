<?php
namespace SCart\Core\Front\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class ShopProvince extends Model
{
    use \SCart\Core\Front\Models\ModelTrait;
    
    public $table = SC_DB_PREFIX.'shop_province';
    public $timestamps               = false;
    private static $getListCountries = null;
    private static $getCodeAll = null;
    protected $connection = SC_CONNECTION;

    public static function getListAll()
    {
        if (self::$getListCountries === null) {
            self::$getListCountries = self::get()->keyBy('abbreviation');
        }
        return self::$getListCountries;
    }

    public static function getCodeAll()
    {
        if (sc_config_global('cache_status') && sc_config_global('cache_country')) {
            if (!Cache::has('cache_country')) {
                if (self::$getCodeAll === null) {
                    self::$getCodeAll = self::pluck('name', 'code')->all();
                }
                sc_set_cache('cache_country', self::$getCodeAll);
            }
            return Cache::get('cache_country');
        } else {
            if (self::$getCodeAll === null) {
                self::$getCodeAll = self::pluck('name', 'abbreviation')->all();
            }
            return self::$getCodeAll;
        }
    }
}
