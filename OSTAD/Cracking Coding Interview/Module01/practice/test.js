function sum_of_min_max(arr){
    let max_n = arr[0];
    let min_n = arr[0];

    for(i=0;i<arr.length;i++){
        if(arr[i] > max_n){
            max_n = arr[i];
        }else if(arr[i] < min_n){
            min_n = arr[i];
        }

    }

    sum = max_n + min_n;
    console.log(sum);
}