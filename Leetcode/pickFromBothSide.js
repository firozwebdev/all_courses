

// function pickFromBothSide(A,B){
//     sum = 0;
//     for(i = 0; i < B; i++){
//         sum += A[i];
//     }
//     max = sum;
  
//     for(i = A.length-1, j = B-1; i > A.length - B, j >= 0; i--,j--){
//         sum = sum - A[j] + A[i];
//         if(max < sum){
//             max = sum
//         }
//     }
    
//     return max;
// }

// function pickFromBothSide(A,B){
//     let sum = 0;
//     for(let i=0;i<B;i++){
//         sum += A[i]
//     }
//     max  = sum;
   
//     for(i = A.length-1, j = B-1; i > A.length - B, j >= 0; i--,j--){
//         sum = sum - A[j] + A[i];
//         max = Math.max(max,sum)
//     }
//     return max;

// }

function pickFromBothSide(A,B){
    let sum = 0;
        
        for(let i = 0; i < B; i++){
            sum += A[i]
        }
        
        max = sum;
        
        for(let i = A.length-1; i < A.length - B; i--){
            for(let j = B-1; j >= 0; j--){
                sum = sum - A[j] + A[i];
                max  = Math.max(max,sum)
            }
          
        }
        
        return max;
}


console.log(pickFromBothSide([5,-2,3,1,2],3))
/*
5-2+3 = 6
5-2

*/

/*
for(i = n-1, j = B-1; i > n - B, j >= 0; i--,j--){
        sum = sum - A[j] + A[i];
        max = Math.max(max,sum)
    }
*/