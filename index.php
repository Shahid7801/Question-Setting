<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMPROCTOR</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="box">
        <!-- Navbar Section -->
        <header class="navbar">
            <div class="navbar-logo">
                <!-- <h2>EXAMPROCTOR</h2> -->
                <h2><a href="?page=home&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">EXAMPROCTOR</a></h2>
            </div>
            <div class="navbar-select">
                <select name="profile_type" class="select" onchange="redirectToProgramPage(this.value)">
                    <option value="">Select Program</option>
                    <option value="BCA" <?php echo (isset($_GET['program']) && $_GET['program'] == 'BCA') ? 'selected' : ''; ?>>BCA</option>
                    <option value="MCA" <?php echo (isset($_GET['program']) && $_GET['program'] == 'MCA') ? 'selected' : ''; ?>>MCA</option>
                    <option value="M.Tech" <?php echo (isset($_GET['program']) && $_GET['program'] == 'M.Tech') ? 'selected' : ''; ?>>M.Tech</option>
                    <option value="B.Tech" <?php echo (isset($_GET['program']) && $_GET['program'] == 'B.Tech') ? 'selected' : ''; ?>>B.Tech</option>
                </select>
            </div>
        </header>


        <!-- Main Content Area -->
        <main class="content">
            <!-- navbar-2 Section -->
            <aside class="sidebar">
                <nav class="sidebar-1">
                    <ul>
                        <li><a href="?page=home&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">HOME</a></li>
                        <li><a href="?page=dashboard&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>"> QUESTION SET</a></li>
                        <li><a href="?page=add-courses&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">COURSES</a></li>
                        <li><a href="?page=add-outcomes&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">OUTCOMES</a></li>
                        <li><a href="?page=add-questions&program=<?php echo isset($_GET['program']) ? $_GET['program'] : ''; ?>">CREATE QUESTION</a></li>

                    </ul>
                </nav>
            </aside>
            <div class="content-area">
                <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                $allowed_pages = ['home', 'dashboard', 'add-courses', 'add-outcomes', 'add-questions','contact'];
                if (in_array($page, $allowed_pages)) {
                    include("pages/$page.php");
                } else {
                    echo "<h2>Page not found</h2>";
                }
                ?>
            </div>
        </main>

        <!-- Footer Section -->
        <footer>
    <div class="footer-container">
        <!-- About Section -->
        <div class="footer-section about">
            <h3>About ExamProctor</h3>
            <p>
                ExamProctor is a state-of-the-art question-setting software designed to simplify and streamline the creation of examination papers for schools, colleges, and universities.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="?page=home" class="content-link">Home</a></li>
                <li><a href="?page=contact" class="content-link">Contact Us</a></li>
                <li><a href="?page=support" class="content-link">Support</a></li>
                <li><a href="?page=faq" class="content-link">FAQ</a></li>
            </ul>
        </div>

        <!-- Contact Information -->
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p>Email: <a href="examproctor@gmail.com">support@examproctor.com</a></p>
            <p>Phone: +91 7800114848</p>
            <p>Address: Aliah University Newtown, West Bengal 700135</p>
        </div>

        <!-- Social Media Links -->
        <div class="footer-section social">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/ham.sidd.353?mibextid=JRoKGi" target="_blank">Facebook</a> |
            <a href="https://github.com/Shahid7801" target="_blank">GitHub</a> |
            <a href="https://linkedin.com/in/shahidsidd" target="_blank">LinkedIn</a>
        </div>
    </div>

    <!-- Copyright Information -->
    <div class="footer-bottom">
        <p>&copy; 2024 ExamProctor - Question Setting Software. All Rights Reserved.</p>
    </div>
</footer>


    </div>
    <script src="assets/js/script.js"></script>

    <script>
        // Function to redirect to a page with selected program
        function redirectToProgramPage(selectedProgram) {
            if (!selectedProgram) return;

            const urlParams = new URLSearchParams(window.location.search);
            const currentPage = urlParams.get('page') || 'home';
            const allowedPages = ['home', 'dashboard', 'add-courses', 'add-outcomes', 'add-questions','contact'];

            if (allowedPages.includes(currentPage)) {
                window.location.href = `?page=${currentPage}&program=${selectedProgram}`;
            } else {
                console.log("Invalid page");
            }
        }





//  footer

document.addEventListener("DOMContentLoaded", function () {
    const contentArea = document.querySelector(".content-area");
    const contentLinks = document.querySelectorAll(".content-link");

    contentLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent default navigation

            const page = this.getAttribute("href").split("=")[1]; // Extract page name

            // Fetch and update the content dynamically
            fetch(`pages/${page}.php`)
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    contentArea.innerHTML = data; // Update content area
                    window.history.pushState(null, "", `?page=${page}`); // Update URL without reloading
                })
                .catch(error => {
                    console.error("Error loading page:", error);
                    contentArea.innerHTML = "<h2>Failed to load content.</h2>";
                });
        });
    });
});

    </script>
</body>

</html>