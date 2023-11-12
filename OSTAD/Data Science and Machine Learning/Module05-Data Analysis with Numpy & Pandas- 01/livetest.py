"""Generate an array of 100 linearly spaced points between 50 and 60

Then covert the vector array to matrix array by (10, 10)

Then perform the operation, array % 5 == 0 """

import numpy as np

# Generate an array of 100 linearly spaced points between 50 and 60
linear_array = np.linspace(50, 60, 100)

# Convert the linear array to a matrix array of size (10, 10)
matrix_array = linear_array.reshape((10, 10))

# Perform the operation array % 5 == 0
result_array = matrix_array % 5 == 0

# Display the results
print("Linear Array:")
print(linear_array)

print("\nMatrix Array:")
print(matrix_array)

print("\nResult Array (array % 5 == 0):")
print(result_array)