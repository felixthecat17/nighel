<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Evaluation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post" action="process_form.php">

            <div class="time-container">
                <label for="time" class="right-label">Time:</label>&nbsp;&nbsp;
                <span id="timePlaceholder" class="right-label"></span>
            </div>

            <h1>STUDENT EVALUATION OF TEACHING BEHAVIOR</h1>

            <p>
                <label for="name" class="left-label">Name or ID number:</label>
                <input type="text" id="Uname" name="Uname" class="semi-small-input">
                <label for="grade" class="left-label">Grade level/Section:</label>
                <input type="text" id="Agrade" name="Agrade" class="semi-small-input">
            </p>
            <p>
                <label for="subject" class="left-label">Name of Teacher:</label>
                <input type="text" id="subjectc" name="subjectc" class="semi-small-input">

                <label for="semester">Select Semester:</label>
                <select id="semester" name="semester" class="semi-small-input">
                    <option value="1st">First Semester</option>
                    <option value="2nd">Second Semester</option>
                    <option value="summer">Summer</option>
                </select>
            </p>
            <br>
            <p>
                Listed below are statements designed to evaluate the teaching behaviors of your teachers, to serve as a basis for evaluation and planning to improve teaching and learning. Each section is rated on a 5-point scale. Please check the appropriate box.
            </p>

            <br>
            <p>Rating Scale:</p>
            <p>5 - Always (Palagi)</p>
            <p>4 - Frequently (Madalas)</p>
            <p>3 - Sometimes (Minsan)</p>
            <p>2 - Rarely (Madalang)</p>
            <p>1 - Never (Hindi Kailanman)</p>
            <br>
            <br>
            <table>
                <tr>
                    <th><p><strong>Criterion</strong></p><p><strong>The teacher........</strong></p></th>
                    <th>5</th>
                    <th>4</th>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                </tr>
                <tr>
                    <td>starts and ends the class on time.</td>
                    <td><input type="checkbox" name="rating1" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 5);"></td>
                    <td><input type="checkbox" name="rating1" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 4);"></td>
                    <td><input type="checkbox" name="rating1" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 3);"></td>
                    <td><input type="checkbox" name="rating1" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 2);"></td>
                    <td><input type="checkbox" name="rating1" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(1, 1);"></td>
                </tr>
                <tr>
                <tr>
                    <td>explained clearly the standards/objectives of the course at the beginning of the school year.</td>
                    <td><input type="checkbox" name="rating2" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 5);"></td>
                    <td><input type="checkbox" name="rating2" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 4);"></td>
                    <td><input type="checkbox" name="rating2" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 3);"></td>
                    <td><input type="checkbox" name="rating2" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 2);"></td>
                    <td><input type="checkbox" name="rating2" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(2, 1);"></td>
                </tr>
                </tr>
                <tr>
                    <td>gives relevant assignments and requirements to reinforce learning</td>
                    <td><input type="checkbox" name="rating3" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 5);"></td>
                    <td><input type="checkbox" name="rating3" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 4);"></td>
                    <td><input type="checkbox" name="rating3" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 3);"></td>
                    <td><input type="checkbox" name="rating3" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 2);"></td>
                    <td><input type="checkbox" name="rating3" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotals(3, 1);"></td>
                </tr>
                <tr>
                    <td>injects a sense of humor in his/her teaching without being vulgar</td>
                    <td><input type="checkbox" name="rating4" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 5);"></td>
                    <td><input type="checkbox" name="rating4" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 4);"></td>
                    <td><input type="checkbox" name="rating4" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 3);"></td>
                    <td><input type="checkbox" name="rating4" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 2);"></td>
                    <td><input type="checkbox" name="rating4" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(4, 1);"></td>
                </tr>
                <tr>
                    <td>has a democratic way in dealing with students/behavior </td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(5, 5);"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(5, 4);"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(5, 3);"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(5, 2);"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(5, 1);"></td>
                </tr>
                <tr>
                    <td>meets class regularly</td>
                    <td><input type="checkbox" name="rating6" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(6, 5);"></td>
                    <td><input type="checkbox" name="rating6" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(6, 4);"></td>
                    <td><input type="checkbox" name="rating6" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(6, 3);"></td>
                    <td><input type="checkbox" name="rating6" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(6, 2);"></td>
                    <td><input type="checkbox" name="rating6" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(6, 1);"></td>
                </tr>
                <tr>
                    <td>employs an acceptable way of handling different types of students. </td>
                    <td><input type="checkbox" name="rating7" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(7, 5);"></td>
                    <td><input type="checkbox" name="rating7" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(7, 5);"></td>
                    <td><input type="checkbox" name="rating7" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(7, 5);"></td>
                    <td><input type="checkbox" name="rating7" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(7, 5);"></td>
                    <td><input type="checkbox" name="rating7" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(7, 5);"></td>
                </tr>
                <tr>
                    <td>relates subject matter to relevant topics of interest of students. </td>
                    <td><input type="checkbox" name="rating8" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(8, 5);"></td>
                    <td><input type="checkbox" name="rating8" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(8, 4);"></td>
                    <td><input type="checkbox" name="rating8" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(8, 3);"></td>
                    <td><input type="checkbox" name="rating8" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(8, 2);"></td>
                    <td><input type="checkbox" name="rating8" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(8, 1);"></td>
                </tr>
                <tr>
                    <td>entertains and answers students' questions. </td>
                    <td><input type="checkbox" name="rating9" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(9, 5);"></td>
                    <td><input type="checkbox" name="rating9" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(9, 4);"></td>
                    <td><input type="checkbox" name="rating9" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(9, 3);"></td>
                    <td><input type="checkbox" name="rating9" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(9, 2);"></td>
                    <td><input type="checkbox" name="rating9" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(9, 1);"></td>
                </tr>
                <tr>
                    <td>relates subject matter to real life or practical situations. </td>
                    <td><input type="checkbox" name="rating10" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(10, 5);"></td>
                    <td><input type="checkbox" name="rating10" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(10, 4);"></td>
                    <td><input type="checkbox" name="rating10" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(10, 3);"></td>
                    <td><input type="checkbox" name="rating10" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(10, 2);"></td>
                    <td><input type="checkbox" name="rating10" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(10, 1);"></td>
                </tr>
                <tr>
                    <td>explains clearly the policies pertaining to the grading system. </td>
                    <td><input type="checkbox" name="rating11" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(11, 5);"></td>
                    <td><input type="checkbox" name="rating11" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(11, 4);"></td>
                    <td><input type="checkbox" name="rating11" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(11, 3);"></td>
                    <td><input type="checkbox" name="rating11" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(11, 2);"></td>
                    <td><input type="checkbox" name="rating11" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(11, 1);"></td>
                </tr>
                <tr>
                    <td>provides student opportunities to recheck their scores/ratings and verify grades. </td>
                    <td><input type="checkbox" name="rating12" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(12, 5);"></td>
                    <td><input type="checkbox" name="rating12" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(12, 4);"></td>
                    <td><input type="checkbox" name="rating12" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(12, 3);"></td>
                    <td><input type="checkbox" name="rating12" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(12, 2);"></td>
                    <td><input type="checkbox" name="rating12" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(12, 1);"></td>
                </tr>
                <tr>
                    <td>gives students constructive feedbacks on their performance in class. </td>
                    <td><input type="checkbox" name="rating13" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(13, 5);"></td>
                    <td><input type="checkbox" name="rating13" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(13, 4);"></td>
                    <td><input type="checkbox" name="rating13" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(13, 3);"></td>
                    <td><input type="checkbox" name="rating13" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(13, 2);"></td>
                    <td><input type="checkbox" name="rating13" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(13, 1);"></td>
                </tr>
                <tr>
                    <td>informs students of their scores/ratings and grades punctually. </td>
                    <td><input type="checkbox" name="rating14" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(14, 5);"></td>
                    <td><input type="checkbox" name="rating14" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(14, 4);"></td>
                    <td><input type="checkbox" name="rating14" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(14, 3);"></td>
                    <td><input type="checkbox" name="rating14" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(14, 2);"></td>
                    <td><input type="checkbox" name="rating14" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(14, 1);"></td>
                </tr>
                <tr>
                    <td>gives quizzes, examinations, assessments and/or performance evaluation in a systematic manner. </td>
                    <td><input type="checkbox" name="rating15" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(15, 5);"></td>
                    <td><input type="checkbox" name="rating15" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(15, 4);"></td>
                    <td><input type="checkbox" name="rating15" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(15, 3);"></td>
                    <td><input type="checkbox" name="rating15" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(15, 2);"></td>
                    <td><input type="checkbox" name="rating15" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(15, 1);"></td>
                </tr>
                <tr>
                    <td>engages students to get involved in interactive and independent learning. </td>
                    <td><input type="checkbox" name="rating16" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(16, 5);"></td>
                    <td><input type="checkbox" name="rating16" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(16, 4);"></td>
                    <td><input type="checkbox" name="rating16" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(16, 3);"></td>
                    <td><input type="checkbox" name="rating16" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(16, 2);"></td>
                    <td><input type="checkbox" name="rating16" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(16, 1);"></td>
                </tr>
                <tr>
                    <td>ssks questions that promote critical and creative thinking. </td>
                    <td><input type="checkbox" name="rating17" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(17, 5);"></td>
                    <td><input type="checkbox" name="rating17" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(17, 4);"></td>
                    <td><input type="checkbox" name="rating17" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(17, 3);"></td>
                    <td><input type="checkbox" name="rating17" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(17, 2);"></td>
                    <td><input type="checkbox" name="rating17" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(17, 1);"></td>
                </tr>
                <tr>
                    <td>ssks questions that promote critical and creative thinking. </td>
                    <td><input type="checkbox" name="rating18" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(18, 5);"></td>
                    <td><input type="checkbox" name="rating18" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(18, 4);"></td>
                    <td><input type="checkbox" name="rating18" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(18, 3);"></td>
                    <td><input type="checkbox" name="rating18" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(18, 2);"></td>
                    <td><input type="checkbox" name="rating18" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(18, 1);"></td>
                </tr>
                <tr>
                    <td>manifests Pillarican spirituality through acts of humility, service and compassion.</td>
                    <td><input type="checkbox" name="rating19" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(19, 5);"></td>
                    <td><input type="checkbox" name="rating19" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(19, 4);"></td>
                    <td><input type="checkbox" name="rating19" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(19, 3);"></td>
                    <td><input type="checkbox" name="rating19" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(19, 2);"></td>
                    <td><input type="checkbox" name="rating19" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(19, 1);"></td>
                </tr>
                <tr>
                    <td>makes favorable or encouraging responses to students' opinions, comments and suggestions. </td>
                    <td><input type="checkbox" name="rating20" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(20, 5);"></td>
                    <td><input type="checkbox" name="rating20" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(20, 4);"></td>
                    <td><input type="checkbox" name="rating20" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(20, 3);"></td>
                    <td><input type="checkbox" name="rating20" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(20, 2);"></td>
                    <td><input type="checkbox" name="rating20" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(20, 1);"></td>
                </tr>
                <tr>
                    <td>practices a sense of propriety in speech, actions, grooming and attire.</td>
                    <td><input type="checkbox" name="rating21" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(21, 5);"></td>
                    <td><input type="checkbox" name="rating21" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(21, 4);"></td>
                    <td><input type="checkbox" name="rating21" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(21, 3);"></td>
                    <td><input type="checkbox" name="rating21" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(21, 2);"></td>
                    <td><input type="checkbox" name="rating21" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(21, 1);"></td>
                </tr>
                <tr>
                    <td>acts as a witness to the Catholic faith by integrating Christian values in lessons.</td>
                    <td><input type="checkbox" name="rating22" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(22, 5);"></td>
                    <td><input type="checkbox" name="rating22" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(22, 4);"></td>
                    <td><input type="checkbox" name="rating22" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(22, 3);"></td>
                    <td><input type="checkbox" name="rating22" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(22, 2);"></td>
                    <td><input type="checkbox" name="rating22" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(22, 1);"></td>
                </tr>
               
                <tr>
                    <td>uses variety of instructional strategies and resources to respond to students' diverse needs. </td>
                    <td><input type="checkbox" name="rating23" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(23, 5);"></td>
                    <td><input type="checkbox" name="rating23" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(23, 4);"></td>
                    <td><input type="checkbox" name="rating23" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(23, 3);"></td>
                    <td><input type="checkbox" name="rating23" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(23, 2);"></td>
                    <td><input type="checkbox" name="rating23" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(23, 1);"></td>
                </tr>
                <tr>
                    <td>incorporates multimedia and visual resources into online teaching.  </td>
                    <td><input type="checkbox" name="rating24" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(24, 5);"></td>
                    <td><input type="checkbox" name="rating24" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(24, 4);"></td>
                    <td><input type="checkbox" name="rating24" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(24, 3);"></td>
                    <td><input type="checkbox" name="rating24" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(24, 2);"></td>
                    <td><input type="checkbox" name="rating24" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(24, 1);"></td>
                </tr>
                <tr>
                    <td>understands and responsive to students with special needs. </td>
                    <td><input type="checkbox" name="rating25" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(25, 5);"></td>
                    <td><input type="checkbox" name="rating25" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(25, 4);"></td>
                    <td><input type="checkbox" name="rating25" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(25, 3);"></td>
                    <td><input type="checkbox" name="rating25" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(25, 2);"></td>
                    <td><input type="checkbox" name="rating25" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(25, 1);"></td>
                </tr>
                <tr>
                    <td>models respects and courtesy at all times. shows concern for students.</td>
                    <td><input type="checkbox" name="rating26" value="5" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(26, 5);"></td>
                    <td><input type="checkbox" name="rating26" value="4" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(26, 4);"></td>
                    <td><input type="checkbox" name="rating26" value="3" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(26, 3);"></td>
                    <td><input type="checkbox" name="rating26" value="2" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(26, 2);"></td>
                    <td><input type="checkbox" name="rating26" value="1" class="rating-checkbox" onclick="uncheckOther(this); updateTotal(26, 1);"></td>
                </tr>
              
            </table>

            <div class="form-button"><br>
            <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function uncheckOther(checkbox) {
            if (checkbox.checked) {
                const checkboxes = document.querySelectorAll('input[name="' + checkbox.name + '"]');
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        }

        // JavaScript for automatic time
        const timePlaceholder = document.getElementById("timePlaceholder");

        function updateTime() {
            const now = new Date();
            const time = now.toLocaleTimeString('en-US');
            timePlaceholder.textContent = time;
        }

        updateTime();
        setInterval(updateTime, 1000);

        
        // to save the choice of the user
        
        function updateTotals(category, value) {
            const checkboxes = document.querySelectorAll(`input[name="rating${category}"]`);

            checkboxes.forEach((checkbox) => {
                // Set the value of the selected checkbox to 1, others to 0
                checkbox.value = (checkbox === event.target) ? value : 0;

                // Uncheck other checkboxes
                checkbox.checked = (checkbox === event.target);
            });

            updateTotal(category);
        }

        function updateTotal(category) {
            const totalCell = document.getElementById(`total${category}`);
            const total = document.querySelectorAll(`input[name="rating${category}"]:checked`).length;
            totalCell.textContent = total;

            // Optionally, you can send the updated total to the server here
            // sendTotalToServer(category, total);
        }

    </script>
</body>
</html>
