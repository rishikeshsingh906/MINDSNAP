<?php 
  session_start(); 
  

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>MindSnap | Home</title>
        <link rel="stylesheet" type="text/css" href="styles/style_index.css">

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="assets/logos/title_icon.png" type="image/icon type">

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
          ?>
        </h3>
      </div>
        <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

        <!--Navbar-->
        <nav>
            <ul class="menu-bar">
                <div class="logo">
                    <a href="index.html">
                        <i class='fas fa-laptop-code' style='font-size:20px'>MindSnap</i>
                        
                    </a>
                </div>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html#recent_courses">Recent Courses</a></li>
                <li><a href="index.html#elective_subjects">Elective Subjects</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="suggestions.html" style="text-decoration: none;">Suggestions</a></li>
                <!-- <li><a href="review.html" style="text-decoration: none;">Reviews</a></li> -->
            </ul>
        </nav>

        <!--Welcome Content-->
        <div class="container">
            <table>
                <tr>
                    <td>
                        <h1>Learn. Grow . Share.<br>Learning Made Easy.</h1>
                        <p>Say good bye to long and frustrating study materials and videos.<br>Access our precise notes to prepare any topics in minutes.</p>
                        <a class="btn-primary" style="text-decoration: none;" href="#search_courses">Browse Courses</a>
                    </td>
                    <td>
                        <img src="assets/main/main_icon.png">
                    </td>
                </tr>
            </table>
            
            <h1 style="font-size: 3rem;">Search Courses</h1>
            <form action="" id="search_courses">
                <input type="search" onkeyup="searchList()" placeholder="Search for Courses....." id="search_key">
                <i class="fa fa-search" onclick="searchList()"></i>
            </form>

            <div class="variable_zone">

            <!--course Cards-->
            <h2 id="recent_courses">Recent courses</h2>
            <div class="course-list">
                <div class="course-card">
                    <a href="courses/networking_subjects/data_communication.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/data_communication.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Data communication</h4>
                </div>
                <div class="course-card">
                    <a href="courses/database_subjects/advanced_dbms.html" target="_blank">
                        <img src="assets/elective_subjects/courses/database_subjects/advanced_dbms.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Advanced DBMS</h4>
                </div>
                <div class="course-card">
                    <a href="courses/basic_engineering_subjects/circuit_theory.html" target="_blank">
                        <img src="assets/elective_subjects/courses/basic_engineering_subjects/circuit_theory.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Circuit Theory</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/computer_science.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/computer_science.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Computer Science</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/advanced_dsa.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/advanced_dsa.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Advanced DSA</h4>
                </div>
            </div>
            
            <h2 id="elective_subjects">Computational Subjects</h2>
            <div class="course-list">
                <div class="course-card">
                    <a href="courses/computational_subjects/automata_theory.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/automata_theory.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Automata Theory</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/compiler_design.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/compiler_design.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Compiler Design</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/natural_language_processing.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/natural_language_processing.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Natural Language Processing</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/neural_networks.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/neural_networks.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Neural Networks</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/design_analysis_algorithms.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/design_analysis_algorithms.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Design & Analysis of Algorithms</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/operating_system.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/operating_system.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Operating System</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/cloud_computing.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/cloud_computing.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Cloud Computing</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/internet_of_things.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/internet_of_things.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Internet of Things</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/data_warehousing.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/data_warehousing.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Data Warehousing</h4>
                </div>
                <div class="course-card">
                    <a href="courses/computational_subjects/machine_learning.html" target="_blank">
                        <img src="assets/elective_subjects/courses/computational_subjects/machine_learning.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Machine Learning</h4>
                </div>
            </div>

            <h2>Programming Languages</h2>
            <div class="course-list">
                <div class="course-card">
                    <a href="courses/programming_languages/oops_c++.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/oops_c++.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>OOPs (c++)</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/java_programming.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/java_programming.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Java Programming</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/web_technologies.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/web_technologies.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Web Technologies</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/net_technologies.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/net_technologies.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>.NET Technologies</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/python.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/python.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Python</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/matlab.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/matlab.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>MATLAB</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/sql.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/sql.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>SQL</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/advanced_dsa.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/advanced_dsa.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Advanced DSA</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/c_language.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/c_language.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>C Language</h4>
                </div>
                <div class="course-card">
                    <a href="courses/programming_languages/php.html" target="_blank">
                        <img src="assets/elective_subjects/courses/programming_languages/php.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>PHP</h4>
                </div>
            </div>

            <h2>Networking Subjects</h2>
            <div class="course-list">
                <div class="course-card">
                    <a href="courses/networking_subjects/data_communication.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/data_communication.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Data Communication</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/computer_networks.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/computer_networks.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Computer Networks</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/wireless_networks.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/wireless_networks.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Wireless Networks</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/microprocessors.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/microprocessors.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Microprocessors</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/wireless_security.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/wireless_security.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Wireless Security</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/mobile_ad_hoc_networks.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/mobile_ad_hoc_networks.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Mobile Ad Hoc Networks</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/ccnp_security.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/ccnp_security.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>CCNP Security</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/cisco_packet_tracer.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/cisco_packet_tracer.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Cisco Packet Tracer</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/juniper_networks.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/juniper_networks.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Juniper Networks</h4>
                </div>
                <div class="course-card">
                    <a href="courses/networking_subjects/cybersecurity.html" target="_blank">
                        <img src="assets/elective_subjects/courses/networking_subjects/cybersecurity.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Cybersecurity</h4>
                </div>
            </div>

            <h2>Basic Engineering Subjects</h2>
            <div class="course-list">
                <div class="course-card">
                    <a href="courses/basic_engineering_subjects/engineering_mathematics.html" target="_blank">
                        <img src="assets/elective_subjects/courses/basic_engineering_subjects/engineering_mathematics.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Engineering Mathematics</h4>
                </div>
                <div class="course-card">
                    <a href="courses/basic_engineering_subjects/circuit_theory.html" target="_blank">
                        <img src="assets/elective_subjects/courses/basic_engineering_subjects/circuit_theory.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Circuit Theory</h4>
                </div>
                <div class="course-card">
                    <a href="courses/basic_engineering_subjects/operations_research.html" target="_blank">
                        <img src="assets/elective_subjects/courses/basic_engineering_subjects/operations_research.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Operations Research</h4>
                </div>
                <div class="course-card">
                    <a href="courses/basic_engineering_subjects/c_programming.html" target="_blank">
                        <img src="assets/elective_subjects/courses/basic_engineering_subjects/c_programming.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>C Programming</h4>
                </div>
                <div class="course-card">
                    <a href="courses/basic_engineering_subjects/data_structures.html" target="_blank">
                        <img src="assets/elective_subjects/courses/basic_engineering_subjects/data_structures.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Data Structures</h4>
                </div>
            </div>

            <h2>Database Subjects</h2>
            <div class="course-list">
                <div class="course-card">
                    <a href="courses/database_subjects/db_management_systems.html" target="_blank">
                        <img src="assets/elective_subjects/courses/database_subjects/db_management_systems.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>DB Management Systems</h4>
                </div>
                <div class="course-card">
                    <a href="courses/database_subjects/rdbms.html" target="_blank">
                        <img src="assets/elective_subjects/courses/database_subjects/rdbms.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>RDBMS</h4>
                </div>
                <div class="course-card">
                    <a href="courses/database_subjects/big_data.html" target="_blank">
                        <img src="assets/elective_subjects/courses/database_subjects/big_data.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Big Data</h4>
                </div>
                <div class="course-card">
                    <a href="courses/database_subjects/advanced_dbms.html" target="_blank">
                        <img src="assets/elective_subjects/courses/database_subjects/advanced_dbms.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Advanced DBMS</h4>
                </div>
                <div class="course-card">
                    <a href="courses/database_subjects/oracle.html" target="_blank">
                        <img src="assets/elective_subjects/courses/database_subjects/oracle.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Oracle</h4>
                </div>
            </div>

            <h2>Others</h2>
            <div class="course-list">
                <div class="course-card">
                    <a href="courses/others/digital_logic_design.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/digital_logic_design.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Digital Logic Design</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/software_engineering.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/software_engineering.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Software Engineering</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/inorganic_chemistry.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/inorganic_chemistry.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Inorganic Chemistry</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/physical_chemistry.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/physical_chemistry.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Physical Chemistry</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/physics.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/physics.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Physics</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/biology.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/biology.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Biology</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/12th_mathematics.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/12th_mathematics.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>12th Mathematics</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/10th_mathematics.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/10th_mathematics.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>10th Mathematics</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/organic_chemistry.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/organic_chemistry.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Organic Chemistry</h4>
                </div>
                <div class="course-card">
                    <a href="courses/others/computer_science.html" target="_blank">
                        <img src="assets/elective_subjects/courses/others/computer_science.jpg" style="width: 250px; height: 370px; padding-left: 5px; padding-right: 5px;">
                    </a>
                    <h4>Computer Science</h4>
                </div>
            </div>
            </div>
            <br><br>
        </div>


        <footer id="contact">
            <div class="footerContainer">
                <div class="socialIcons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="footerNav">
                    <ul><li><a href="">Home</a></li>
                        <li><a href="">Tutorials</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">our Team</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="footerBottom">
                <p>Copyright &copy;2024; Designed by <a href="index.html" style="color: white; font-weight: bold;">MindSnap</a></p>
            </div>
        </footer>
        <script src="js/index_logic.js"></script>
    </body>
</html>
</div>
                
</body>
</html>