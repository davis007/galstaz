<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShopsFixture
 *
 */
class ShopsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'users_id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'plan' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '料金プラン １=無料 ２=プレミアム', 'precision' => null, 'autoIncrement' => null],
        'qjin' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '求人オプションがあるかないか　ある＝１　ない＝０', 'precision' => null, 'autoIncrement' => null],
        'staff' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '営業担当', 'precision' => null, 'autoIncrement' => null],
        'opt' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '業種ジャンル　デリヘルとか業種の名前', 'precision' => null, 'autoIncrement' => null],
        'pref_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'buisness_areas_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'client_name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'client_login' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'client_tel' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'クライアント電話番号', 'precision' => null, 'fixed' => null],
        'client_url' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '公式サイトURL', 'precision' => null],
        'start' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '営業開始', 'precision' => null, 'fixed' => null],
        'end' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '営業終了', 'precision' => null, 'fixed' => null],
        'hosoku' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '営業時間捕捉', 'precision' => null],
        'bpid' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '営業担当者(権利者)', 'precision' => null, 'autoIncrement' => null],
        'cars' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '運用台数', 'precision' => null, 'autoIncrement' => null],
        'cost' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '月額費用', 'precision' => null, 'autoIncrement' => null],
        'cplay' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '利用停止スイッチ', 'precision' => null, 'autoIncrement' => null],
        'kihon' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '基本料金', 'precision' => null],
        'bikou' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'その他備考', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'アカウント開設日', 'precision' => null],
        'remarks' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '備考', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'users_id' => 1,
            'plan' => 1,
            'qjin' => 1,
            'staff' => 1,
            'opt' => 1,
            'pref_id' => 1,
            'buisness_areas_id' => 1,
            'client_name' => 'Lorem ipsum dolor sit amet',
            'client_login' => 'Lorem ipsum dolor sit amet',
            'client_tel' => 'Lorem ipsum dolor ',
            'client_url' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start' => 'Lorem ip',
            'end' => 'Lorem ip',
            'hosoku' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'bpid' => 1,
            'cars' => 1,
            'cost' => 1,
            'cplay' => 1,
            'kihon' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'bikou' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'created' => '2016-09-25 00:43:06',
            'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
