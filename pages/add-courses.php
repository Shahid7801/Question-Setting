<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <link rel="stylesheet" href="assets/css/dark-theme.css">
</head>

<body>
    <div class="container">
        <!-- Submitted Courses Section -->
        <div id="submitted-course">
            <h2>All Submitted Course</h2>
            <table id="courses-table">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th >Credits</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Course rows will be dynamically inserted here -->
                </tbody>
            </table>
        </div>
        <div class="add-edit">
            <!-- Add Course Section -->
            <div id="add-course">
                <h2>Add Course</h2>
                <form id="add-course-form">
                    <label for="course_name">Course Name:</label>
                    <input type="text" id="course_name" name="course_name"placeholder="Enter Course Name" required>

                    <label for="course_code">Course Code:</label>
                    <input type="text" id="course_code" name="course_code"placeholder="ABC123" required pattern="[A-Z]{3}\d{3}"
                        title="Course code should be in the format ABC123">

                    <label for="credits">Credits:</label>
                    <input type="number" id="credits" name="credits" placeholder="Enter Course Credit" required min="1"
                        title="Credits must be a positive number">

                    <button type="submit">Add Course</button>
                </form>
            </div>

            <!-- Edit Course Modal -->
            <div id="edit-modal" class="modal">
                <h2>Edit Course</h2>
                <form id="edit-form">
                    <label for="edit_course_name">Course Name:</label>
                    <input type="text" id="edit_course_name" name="course_name" required>

                    <label for="edit_course_code">Course Code:</label>
                    <input type="text" id="edit_course_code" name="course_code" required pattern="[A-Z]{3}\d{3}">

                    <label for="edit_credits">Credits:</label>
                    <input type="number" id="edit_credits" name="credits" required min="1">

                    <input type="hidden" id="edit_course_id" name="id">

                    <button type="submit">Save Changes</button>
                </form>
            </div>
        </div>
        <div class="overlay"></div>
    </div>

    <script src="assets/js/courses.js"></script>
</body>
</html>