# Write a program to make another list of duplicate elements
# from the following list [1, 5, 6, 5, 1, 2, 3]


# Given list
original_list = [1, 5, 6, 5, 1, 2, 3]

# Create an empty list to store duplicates
duplicate_list = []

# Iterate through the original list
for num in original_list:
    # If the element appears more than once in the list
    if original_list.count(num) > 1:
        # Add it to the duplicate list if it's not already there
        if num not in duplicate_list:
            duplicate_list.append(num)

# Print the list of duplicate elements
print("List of duplicate elements:", duplicate_list)
