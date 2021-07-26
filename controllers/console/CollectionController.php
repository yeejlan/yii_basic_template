<?php 

namespace app\controllers\console;

use Yii;

class CollectionController extends BaseController
{
    public function actionDemo() {
        $c = collect([]);
        $c[0] = 1;
        $c[] = 2;
        $c = $c->concat([3,4,5]);
        print_r($c->all());
    }

    public function actionGroupby() {
        $collection = collect([
            ['account_id' => 'account-x10', 'product' => 'Chair'],
            ['account_id' => 'account-x10', 'product' => 'Bookcase'],
            ['account_id' => 'account-x11', 'product' => 'Desk'],
        ]);

        $grouped = $collection->groupBy('account_id')
            ->dump();
    }

    public function actionKeyby() {
        $topMenuArr = collect([
            ['id' => '100', 'name' => 'Menu 1'],
            ['id' => '200', 'name' => 'Menu 2'],
        ]);

        $topMenu = $topMenuArr->keyBy('id')
            ->dump();
    }
}
