const Hello = require('../src/Hello.vue');
var assert = require('assert');
describe('Array', ()=>{
  describe('#indexOf()', ()=>{
    it('should return -1 when the value is not present', function() {
      assert.equal([1, 2, 3].indexOf(4), -1);
    });
  });

//     コンポーネントの options 内にある関数を実行し、
//   結果を検証します。
  describe("param test",()=>{
    it('sets the correct default data', () => {
        assert.equal(typeof Hello.default.data,'function');
        const defaultData = Hello.default.data();
        assert.equal(defaultData.text,'hello');
      })    
  })

});