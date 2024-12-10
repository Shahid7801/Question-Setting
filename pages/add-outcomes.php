<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outcome Management</title>
    <link rel="stylesheet" href="assets/css/dark-theme.css">
</head>

<body>
    <div class="container">
        <div class="model">
            <!-- Select Course Section -->

            <h2>Outcomes</h2>
            <label for="course">Select Course:</label>
            <select id="course" name="course" aria-label="Select a course">
                <!-- Options of course code will be displayed here dynamically -->
            </select>


            <!-- Outcome Submission Form -->
            <form id="outcomeForm" aria-labelledby="outcomeForm">
                <label for="outcome">Outcome:</label><br>
                <!-- <input type="textarea" id="outcome" name="outcome" required placeholder="Enter outcome description" aria-describedby="outcome-help"><br> -->
                <textarea id="outcome" name="outcome" placeholder="Enter Outcome Description" rows="5" cols="80" required aria-describedby="outcome-help"></textarea><br>
                <small id="outcome-help">Provide a brief description of the outcome.</small><br>
                <button type="submit" aria-label="Submit new outcome">Submit</button>
            </form>
        </div>
        <div class="add-oc">

            <!-- Outcomes List -->
            <div class="model">
                <h3>Outcomes List</h3>
                <ul id="outcomes-list">
                    <!-- List of outcomes will be displayed here dynamically -->




                </ul>
            </div>

            <!-- Edit Outcome Modal -->
            <div id="editOutcomeModal" class="model">
                <div class="edit-content">
                    <div class="edit-head">
                        <h2>Edit Outcome</h2>
                        <span class="close" onclick="closeModal()">&times;</span>
                    </div>

                    <form id="editOutcomeForm">
                        <label for="editOutcomeText">Outcome Text</label>
                        <textarea id="editOutcomeText" rows="4" required></textarea>
                        <input type="hidden" id="editOutcomeId" />
                        <button type="submit">Save Changes</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/outcomes.js"></script>
</body>

</html>