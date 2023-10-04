# Dictionary containing grade information (minimum score for each grade)
grade_info = {
    'A': 90,
    'B': 80,
    'C': 70,
    'D': 60,
    'E': 50,
    'E-': 40,
    'F': 0
}


# Function to determine grade based on the score
def calculate_grade(score):
    for grade, min_score in grade_info.items():
        if score >= min_score:
            return grade
    return 'F'  # If the score is below the minimum score for 'F' grade


# Main function
def main():
    try:
        # Taking user input for the score
        score = float(input("Enter the student's score: "))

        # Validating score range
        if 0 <= score <= 100:
            grade = calculate_grade(score)
            print(f"Student's grade: {grade}")
        else:
            print("Invalid score. Please enter a score between 0 and 100.")
    except ValueError:
        print("Invalid input. Please enter a numeric score.")


# Calling the main function
if __name__ == "__main__":
    main()
