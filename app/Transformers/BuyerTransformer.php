<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Buyer;

class BuyerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Buyer $buyer)
    {
        return [
            'identifier' => (int) $buyer->id,
            'name' => (string) $buyer->name,
            'email' => (string) $buyer->email,
            'isVerified' => (int) $buyer->verified,
            'creationDate' => $buyer->created_at,
            'lastChangeDate' => $buyer->updated_at,
            'deletedDate' => isset($buyer->deleted_at) ? (string) $buyer->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes =  [
            'identifier' => 'id',
            'name' => 'name',
            'email' => 'email',
            'isVerified' => 'verified',
            'creationDate' => 'created_at',
            'lastChangeDate' => 'updated_at',
            'deletedDate' => 'deleted_at',
        ];

        return isset($attributes[$index]) ?  $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes =  [
            'id' => 'identifier',
            'name' => 'name',
            'email' => 'email',
            'verified' => 'isVerified',
            'created_at' => 'creationDate',
            'updated_at' => 'lastChangeDate',
            'deleted_at' => 'deletedDate',
        ];

        return isset($attributes[$index]) ?  $attributes[$index] : null;
    }
}
