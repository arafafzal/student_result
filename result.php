<?php
// Function to calculate the result
function calculateResult($marks) {
    $totalMarks = 0;
    $subjectCount = count($marks);

    // Validate mark ranges and check for failure condition
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.";
            return;
        } elseif ($mark < 33) {
            echo "Student has failed in one or more subjects.";
            return;
        }
        $totalMarks += $mark;
    }

    // Calculate average marks
    $averageMarks = $totalMarks / $subjectCount;

    // Switch case for grade calculation
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks <= 79):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks <= 69):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks <= 59):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks <= 49):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks <= 39):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output the results
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: $grade";
}

// Input marks for five subjects
$marks = [55, 65, 70, 40, 30]; // Example input (you can change it)

// Call the function to calculate the result
calculateResult($marks);

?>
