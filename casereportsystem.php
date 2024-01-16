<!DOCTYPE html>
<html>

<head>
  <title>Case Report System</title>
  <style>
    body {
      background-color: #333;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    form {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      max-width: 600px;
      width: 100%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    input[type="text"],
    select,
    textarea {
      display: block;
      margin: 10px 0;
      padding: 10px;
      width: calc(100% - 20px);
      border-radius: 5px;
      border: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"] {
      background-color: #f00;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"]:hover {
      background-color: #c00;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
      display: block;
    }
  </style>
</head>

<body>
  <div class="container">
    <form id="caseReportForm" onsubmit="return handleFormSubmission()" method="post">
      <h1>Case Report System</h1>
      <label for="student_id">Student ID:</label>
      <input type="text" id="student_id" placeholder="Enter student ID" />
      <label for="dob">Date Reported:</label>
      <input type="date" id="dob" name="dob" />
      <label for="case_type">Case Type:</label>
      <select id="case_type">
        <option value="" disabled selected>Select case type</option>
        <option value="bullying">Bullying</option>
        <option value="academic">Academic</option>
        <option value="behavioral">Behavioral</option>
      </select>
      <label for="description">Description:</label>
      <textarea id="description" placeholder="Enter description"></textarea>
      <label for="status">Status:</label>
      <input type="text" id="status" placeholder="Enter status" />
      <label for="action_taken">Action Taken:</label>
      <textarea id="action_taken" placeholder="Enter action taken"></textarea>
      <label for="notes">Notes:</label>
      <textarea id="notes" placeholder="Enter notes"></textarea>
      <label for="evidence">Evidence:</label>
      <input type="text" id="evidence" placeholder="Enter evidence" />
      <label for="counselor_comments">Counselor Comments:</label>
      <textarea id="counselor_comments" placeholder="Enter counselor comments"></textarea>
      <label for="parent_involvement">Parent Involvement:</label>
      <input type="text" id="parent_involvement" placeholder="Enter parent involvement" />
      <label for="follow_up_actions">Follow-Up Actions:</label>
      <textarea id="follow_up_actions" placeholder="Enter follow-up actions"></textarea>
      <label for="dob">Date Closed:</label>
      <input type="date" id="dob" name="dob" />
      <input type="submit" value="Submit" />
    </form>
    <form method="post">
      <h1>Department of Education Intake Sheet</h1>

      <h2>I. INFORMATION:</h2>
      <h3>A. VICTIM:</h3>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" />
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" />
      <label for="age">Age:</label>
      <input type="text" id="age" name="age" />
      <label for="sex">Sex:</label>
      <select id="sex" name="sex">
        <option value="" disabled selected>Select sex</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <label for="grade">Gr. /Yr. and Section:</label>
      <input type="text" id="grade" name="grade" />
      <label for="adviser">Adviser:</label>
      <input type="text" id="adviser" name="adviser" />
      <h4>Parents:</h4>
      <label for="mother">Mother:</label>
      <input type="text" id="mother" name="mother" />
      <label for="mother_age">Age:</label>
      <input type="text" id="mother_age" name="mother_age" />
      <label for="mother_occupation">Occupation:</label>
      <input type="text" id="mother_occupation" name="mother_occupation" />
      <label for="father">Father:</label>
      <input type="text" id="father" name="father" />
      <label for="father_age">Age:</label>
      <input type="text" id="father_age" name="father_age" />
      <label for="father_occupation">Occupation:</label>
      <input type="text" id="father_occupation" name="father_occupation" />
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" />
      <label for="contact_number">Contact Number :</label>
      <input type="text" id="contact_number" name="contact_number" />
      <h3>B. COMPLAINANT:</h3>
      <label for="complainant_name">Name:</label>
      <input type="text" id="complainant_name" name="complainant_name" />
      <label for="complainant_relationship">Relationship to Victim:</label>
      <input type="text" id="complainant_relationship" name="complainant_relationship" />
      <label for="complainant_address">Address:</label>
      <input type="text" id="complainant_address" name="complainant_address" />
      <label for="contact_number">Contact Number :</label>
      <input type="text" id="contact_number" name="contact_number" />
      <h3>C. RESPONDENT:</h3>
      <label for="respondent_name">Name:</label>
      <input type="text" id="respondent_name" name="respondent_name" />
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" />
      <label for="respondent_age">Age:</label>
      <input type="text" id="respondent_age" name="respondent_age" />
      <label for="sex">Sex:</label>
      <select id="sex" name="sex">
        <option value="" disabled selected>Select sex</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <label for="respondent_designation">Designation/Position:</label>
      <input type="text" id="respondent_designation" name="respondent_designation" />
      <label for="respondent_address">Address:</label>
      <input type="text" id="respondent_address" name="respondent_address" />
      <label for="contact_number">Contact Number :</label>
      <input type="text" id="contact_number" name="contact_number" />
      <input type="submit" value="Submit" />
    </form>
  </div>
  <script>
    function handleFormSubmission() {
      // Replace this alert with your logic to handle form submission
      alert("Form submitted!");

      // Prevent the form from actually submitting
      return false;
    }
  </script>
  <?php
  include('config.php');

  $victim_name = $_POST['victim_name'];
  $victim_date_of_birth = $_POST['victim_date_of_birth'];
  $victim_age = $_POST['victim_age'];
  $victim_sex = $_POST['victim_sex'];
  $victim_grade_section = $_POST['victim_grade_section'];
  $victim_adviser = $_POST['victim_adviser'];
  $mother_name = $_POST['mother_name'];
  $mother_age = $_POST['mother_age'];
  $mother_occupation = $_POST['mother_occupation'];
  $father_name = $_POST['father_name'];
  $father_age = $_POST['father_age'];
  $father_occupation = $_POST['father_occupation'];
  $address = $_POST['address'];
  $contact_number = $_POST['contact_number'];
  $complainant_name = $_POST['complainant_name'];
  $complainant_relationship = $_POST['complainant_relationship'];
  $complainant_address = $_POST['complainant_address'];
  $complainant_contact_number = $_POST['complainant_contact_number'];
  $respondent_name = $_POST['respondent_name'];
  $respondent_date_of_birth = $_POST['respondent_date_of_birth'];
  $respondent_age = $_POST['respondent_age'];
  $respondent_sex = $_POST['respondent_sex'];
  $respondent_position = $_POST['respondent_position'];
  $respondent_address = $_POST['respondent_address'];
  $respondent_contact_number = $_POST['respondent_contact_number'];

  $sql = "INSERT INTO education_intake (victim_name, victim_date_of_birth, victim_age, victim_sex, victim_grade_section, victim_adviser, mother_name, mother_age, mother_occupation, father_name, father_age, father_occupation, address, contact_number, complainant_name, complainant_relationship, complainant_address, complainant_contact_number, respondent_name, respondent_date_of_birth, respondent_age, respondent_sex, respondent_position, respondent_address, respondent_contact_number) 
        VALUES ('$victim_name', '$victim_date_of_birth', '$victim_age', '$victim_sex', '$victim_grade_section', '$victim_adviser', '$mother_name', '$mother_age', '$mother_occupation', '$father_name', '$father_age', '$father_occupation', '$address', '$contact_number', '$complainant_name', '$complainant_relationship', '$complainant_address', '$complainant_contact_number', '$respondent_name', '$respondent_date_of_birth', '$respondent_age', '$respondent_sex', '$respondent_position', '$respondent_address', '$respondent_contact_number')";

  if ($conn->query($sql) === TRUE) {
    echo "Education Intake information submitted
    successfully!";
  } else {
    echo "Error: " . $sql . "<br />" . $conn->error;
  }
  $conn->close(); ?>
</body>

</html>