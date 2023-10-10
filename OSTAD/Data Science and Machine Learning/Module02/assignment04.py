# Write a  program to sort by ascending order from the following list. (Create a function to solve it)
#
# List = [1, 5, 2, 9, 3, 22, 13]
def sort_ascending(input_list):
    sorted_list = sorted(input_list)
    return sorted_list


# Input list
input_list = [1, 5, 2, 9, 3, 22, 13]

# Sorting the list in ascending order using the function
sorted_list = sort_ascending(input_list)

# Output the sorted list
print("Original List:", input_list)
print("Sorted List (Ascending Order):", sorted_list)
