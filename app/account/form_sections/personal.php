<details open>
    <summary>
        <h2>Personal Information</h2>
    </summary>
    <label for="username">User name:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['user_name'] . '" ';
            }
            ?> type="text" id="username" name="username" required><br><br>

    <label for="fullName">Full Name:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['fullname'] . '" ';
            }
            ?> type="text" id="fullName" name="fullName" required><br><br>

    <label for="date_birth">Date of Birth:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['date_birth'] . '" ';
            }
            ?> type="date" id="date_birth" name="date_birth" required><br><br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender">
        <option <?php if (isset($row) && $row['gender'] === 'male') echo 'selected'; ?> value="male">Male</option>
        <option <?php if (isset($row) && $row['gender'] === 'female') echo 'selected'; ?> value="female">Female</option>
        <option <?php if (isset($row) && $row['gender'] === 'other') echo 'selected'; ?> value="other">Other</option>
    </select><br><br>

    <label for="email">Email Address:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['email'] . '" ';
            }
            ?> type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['password'] . '" ';
            }
            ?> type="password" id="password" name="password" required><br><br>

    <label for="phone">Phone Number:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['name'] . '" ';
            }
            ?> type="tel" id="phone" name="phone" required><br><br>
</details>