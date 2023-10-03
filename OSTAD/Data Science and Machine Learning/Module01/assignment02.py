#Sum all the odd numbers from 0 to 100 and print it to the screen in python

# Initialize a variable to store the sum of odd numbers
sum_of_odd_numbers = 0

# Iterate through numbers from 0 to 100
for number in range(100):
    # Check if the number is odd
    if number % 2 != 0:
        # Add the odd number to the sum
        sum_of_odd_numbers += number

# Print the sum of odd numbers
print("Sum of odd numbers from 0 to 100:", sum_of_odd_numbers)