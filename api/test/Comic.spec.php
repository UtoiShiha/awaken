<?php
use App\models\Comic;
use App\util\DB;
describe('ComicModelTest', function () {
    beforeAll(function () {
        $this->target = new Comic(DB::getInstance());
    });

    describe('漫画の情報',function(){
            it('漫画の情報を返す',function(){
                $ideal = ['title','neet_id','update_date','create_date','author'];
                expect($this->target->getInfo())->toBeA('array')->toContainKey($ideal);
            });
        }
    );
});
