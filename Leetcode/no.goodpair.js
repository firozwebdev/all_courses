// No. of good pair
var numIdenticalPairs = function(nums) {
    let good_pair = 0;
    for(let i=0;i<nums.length;i++){
        let count = 0;
        for(let j = i+1; j<nums.length;j++){
            if(nums[i] == nums[j]){
                count += 1;
            }
        }
        good_pair += count;
    }
    return good_pair;
};
console.log(numIdenticalPairs(1,1,1,3,4,5,3,5,2));
