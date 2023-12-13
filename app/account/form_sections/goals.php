<details open>
    <summary>
        <h2>Fitness Goals or Preferences</h2>
    </summary>

    <label for="fitnessActivities">Desired fitness activities or classes:</label>
    <select id="fitnessActivities" name="fitnessActivities">
        <option <?php if (isset($row) && $row['desired_activities'] === 'all') echo 'selected'; ?> value="all">Fitness, food and stress management</option>
        <option <?php if (isset($row) && $row['desired_activities'] === 'fitness,food') echo 'selected'; ?> value="fitness,food">Fitness and food</option>
        <option <?php if (isset($row) && $row['desired_activities'] === 'fitness,stress') echo 'selected'; ?> value="fitness,stress">Fitness and stress management</option>
        <option <?php if (isset($row) && $row['desired_activities'] === 'food,stress') echo 'selected'; ?> value="food,stress">Food and stress management</option>
        <option <?php if (isset($row) && $row['desired_activities'] === 'fitness') echo 'selected'; ?> value="fitness">Fitness</option>
        <option <?php if (isset($row) && $row['desired_activities'] === 'food') echo 'selected'; ?> value="food">Food</option>
        <option <?php if (isset($row) && $row['desired_activities'] === 'stress') echo 'selected'; ?> value="stress">Stress management</option>
    </select><br><br>

    <label for="schedule">Schedule:</label>
    <select id="schedule" name="schedule">
        <option <?php if (isset($row) && $row['prefered_schedule'] === 'morning') echo 'selected'; ?> value="morning">Morning</option>
        <option <?php if (isset($row) && $row['prefered_schedule'] === 'evening') echo 'selected'; ?> value="evening">Evening</option>
        <option <?php if (isset($row) && $row['prefered_schedule'] === 'mixed') echo 'selected'; ?> value="mixed">Mixed</option>
    </select><br><br>

    <label for="specificGoals">Specific fitness goals:</label>
    <select id="specificGoals" name="specificGoals">
        <option <?php if (isset($row) && $row['goals'] === 'fit') echo 'selected'; ?> value="fit">Being fit</option>
        <option <?php if (isset($row) && $row['goals'] === 'muscle') echo 'selected'; ?> value="muscle">Build muscle</option>
        <option <?php if (isset($row) && $row['goals'] === 'relief') echo 'selected'; ?> value="relief">Relief stress</option>
        <option <?php if (isset($row) && $row['goals'] === 'balance') echo 'selected'; ?> value="balance">Keep a balance</option>
    </select><br><br>
</details>