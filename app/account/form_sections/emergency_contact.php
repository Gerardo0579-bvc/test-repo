<details open>
    <summary>
        <h2>Emergency Contact Information</h2>
    </summary>
    <label for="emergencyContactName">Name of Emergency Contact:</label>
    <input type="text" <?php
                        if (isset($row)) {
                            echo 'value="' . $row['name'] . '" ';
                        }
                        ?> id="emergencyContactName" name="emergencyContactName" required><br><br>

    <label for="relationship">Relationship to Participant:</label>
    <input type="text" <?php
                        if (isset($row)) {
                            echo 'value="' . $row['relationship'] . '" ';
                        }
                        ?> id="relationship" name="relationship" required><br><br>

    <label for="emergencyPhoneNumber">Emergency Contact Phone Number:</label>
    <input type="tel" <?php
                        if (isset($row)) {
                            echo 'value="' . $row['phone'] . '" ';
                        }
                        ?> id="emergencyPhoneNumber" name="emergencyPhoneNumber" required><br><br>

</details>