<?php

use Controllers\Sample;

describe('SampleTest', function () {
    beforeAll(function () {
        $this->service = new Sample();
    });

    describe('SampleMethod',function(){
        it('結果がtrue',function(){
            expect($this->service->hoge())->toBe(true);
            });
        }
    );
});
