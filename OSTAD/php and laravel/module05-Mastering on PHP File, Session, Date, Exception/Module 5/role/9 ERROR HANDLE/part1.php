<?php



if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    function riskyFunction() {
        if(rand(0, 1) === 0) {
            throw new Exception("Something went wrong in riskyFunction!\n");
        }
    
        return "All is well.";
    }
    

    try {
        echo riskyFunction();
    } catch (Exception $e) {
        // Log the error message
        error_log($e->getMessage(), 3, "error.log");
    
        // Display a generic error message to the user
        echo "An error occurred. Please try again later.";
    }


}