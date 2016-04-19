<?php
/**
 * Created by PhpStorm.
 * User: nunes
 * Date: 19/04/16
 * Time: 18:06
 */

namespace CodeProject\Repositories;

use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository {

    public function model(){
        return Client::class;
    }
}