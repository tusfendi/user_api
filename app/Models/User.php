<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Collection;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";

    protected $guarded = [];

    public static function getUsers($filter)
    {
        $limitPaginate = $filter['lt'] ?? 30;
        $offset = $filter['of'] ?? 0;
        $data = self::select('*');
        $data->paginate($offset, ['*'], 'pagination_offset')
            ->appends($filter);
        $data = $data->limit($limitPaginate)
            ->get();
        return $data;

    }
}
