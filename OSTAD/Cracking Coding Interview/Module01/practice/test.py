def sum_of_min_max(nums):
    max_n = nums[0]
    min_n = nums[0]

    for i in range(len(nums)):
        if nums[i] > max_n:
            max_n = nums[i]
        elif nums[i] < min_n:
            min_n = nums[i]
    return max_n + min_n


sum = sum_of_min_max([1,56,34,12])
print(sum)