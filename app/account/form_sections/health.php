<details open>
    <summary>
        <h2>Health Information</h2>
    </summary>
    <label for="medicalConditions">Any existing medical conditions:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['medical_condition'] . '" ';
            }
            ?> type="text" id="medicalConditions" name="medicalConditions"><br><br>

    <label for="allergies">Allergies:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['allergies'] . '" ';
            }
            ?> type="text" id="allergies" name="allergies"><br><br>

    <label for="medications">Medications currently taking:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['medications'] . '" ';
            }
            ?> type="text" id="medications" name="medications"><br><br>

    <label for="physicianContact">Physician's contact information:</label>
    <input <?php
            if (isset($row)) {
                echo 'value="' . $row['physician_info'] . '" ';
            }
            ?> type="text" id="physicianContact" name="physicianContact"><br><br>
</details>