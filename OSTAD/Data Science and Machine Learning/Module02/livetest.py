#Write a function to make an hour to minute converter.
def hours_to_minutes(hours):
    minutes = hours * 60
    return minutes

# Example usage
hours = 1
converted_minutes = hours_to_minutes(hours)
print(f"{hours} hours is equal to {converted_minutes} minutes.")
