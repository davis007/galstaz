<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shop Entity
 *
 * @property int $id
 * @property int $users_id
 * @property int $plan
 * @property int $qjin
 * @property int $staff
 * @property int $opt
 * @property int $pref_id
 * @property int $buisness_areas_id
 * @property string $client_name
 * @property string $client_login
 * @property string $client_tel
 * @property string $client_url
 * @property string $start
 * @property string $end
 * @property string $hosoku
 * @property int $bpid
 * @property int $cars
 * @property int $cost
 * @property int $cplay
 * @property string $kihon
 * @property string $bikou
 * @property \Cake\I18n\Time $created
 * @property string $remarks
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pref $pref
 * @property \App\Model\Entity\BuisnessArea $buisness_area
 */
class Shop extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
