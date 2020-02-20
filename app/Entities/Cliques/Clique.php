<?php

namespace App\Entities\Cliques;

use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class Clique
 * @package App\Entities
 */
class Clique extends Entity
{
    protected $guarded = [];

    //todo generate a clique when a user signs up by
    // default so each user owns a clique, and get points when someone joins his clique


    const MAX_MEMBER_COUNT = 5;
}
