<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
  
</head>

<body>
  <div class="container">

    <form action="step1_form.php" method="post" id="step1" name="step1">
      <h3 class="form-title">Member Information</h3>
      <input type="text" id="referral_code" placeholder="Referral Code:" name="referral_code"><br><br>
      <input type="text" id="first_name" placeholder="First Name" name="first_name" required><br><br>
      <input type="text" id="middle_name" placeholder="Middle Name" name="middle_name"><br><br>
      <input type="text" id="last_name" placeholder="Last name" name="last_name" required><br><br>
      <input type="text" id="username" placeholder="Username" name="username" required><br><br>
      <input type="password" id="password" placeholder="Password" name="password" required><br><br>
      <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password"
        required><br><br>
      <input type="file" id="profile_image" name="profile_image" accept="image/*" ><br><br>
      <div class="btn-box">
        <input type="submit" name="submit-part1" class="submit-btn" id="Next1" value="Next">
      </div>
    </form>


    <form action="step1_form.php" method="post" id="step2" name="step2">
      <h3 class="form-title">Contact Information</h3>
      <input type="date" id="date_of_birth" placeholder="Date of Birth" name="date_of_birth" required><br><br>
      <input type="tel" id="phone_number" placeholder="Phone Number:" name="phone_number" required><br><br>
      <input type="tel" id="alt_phone_number" placeholder="Alternate Phone Number" name="alt_phone_number"><br><br>
      <input type="email" id="email" placeholder="Email" name="email" required><br><br>
      <input type="text" id="temp_address" placeholder="Temporary Address" name="temp_address"><br><br>
      <input type="text" id="perm_address" placeholder="Permanent Address" name="perm_address"><br><br>
      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select><br><br>
      <div class="btn-box">
        <input type="submit" class="submit-btn" id="Back1" value="Back">
        <input type="submit" name="submit-part2" id="Next2" class="submit-btn" value="Next">
      </div>
    </form>


    <form action="step1_form.php" method="post" id="step3" name="step3">
      <h3 class="form-title">Additional Information</h3>
      <input type="text" id="citizenship_number" placeholder="Citizenship Number:" name="citizenship_number"
        required><br><br>
      <input type="text" id="education_level" placeholder="Education Level" name="education_level" required><br><br>
      <label for="blood_group">Blood Group:</label>
      <select id="blood_group" name="blood_group" required>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select><br><br>
      <label for="marital_status">Marital Status:</label>
      <select id="marital_status" name="marital_status" required>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="Divorced">Divorced</option>
        <option value="Widowed">Widowed</option>
      </select><br><br>
      <input type="text" id="skills" placeholder="Skills" name="skills"><br><br>
      <input type="text" id="emergency_contact_person" placeholder="Emergency Contact Person"
        name="emergency_contact_person" required><br><br>
      <input type="text" id="emergency_contact_phone" placeholder="Emergency Contact Phone"
        name="emergency_contact_phone" required><br><br>
      <input type="text" id="occupation" placeholder="Occupation" name="occupation"><br><br>
      <input type="file" id="citizenship_image" name="citizenship_image"><br><br>

      <div class="btn-box">
        <input type="submit" class="submit-btn" id="Back2" value="Back">
        <input type="submit" name="submit-part3" id="Next3" class="submit-btn" value="Next">
      </div>
    </form>


    <form action="step1_form.php" method="post" id="step4" name="step4">
      <h3 class="form-title">Referrals</h3>
      <input type="text" id="referral_friend_1" placeholder="Referral Friend 1:" name="referral_friend_1"
        required><br><br>

      <input type="text" id="referral_friend_1_contact" placeholder="Referral Friend 1 Contact"
        name="referral_friend_1_contact" required><br><br>

      <input type="text" id="referral_friend_2" placeholder="rral Friend 2:" name="referral_friend_2"><br><br>

      <input type="text" id="referral_friend_2_contact" placeholder="Referral Friend 2 Contact"
        name="referral_friend_2_contact"><br><br>

      <label for="terms_and_conditions">I accept the Terms and Conditions</a>:</label>
      <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions" required>

      <label for="own_will">I am filling this form of my own will:</label>
      <input type="checkbox" id="own_will" name="own_will" required><br><br>
      <div class="btn-box">
        <input type="submit" class="submit-btn" id="Back3" value="Back">
        <input type="submit" name="submit-part4" id="Submit" class="submit-btn" value="Submit">
      </div>
    </form>

    <div class="step-row">
      <div id="form-progress"></div>
      <div class="step-col"><small>Step 1</small></div>
      <div class="step-col"><small>Step 2</small></div>
      <div class="step-col"><small>Step 3</small></div>
      <div class="step-col"><small>Step 4</small></div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>