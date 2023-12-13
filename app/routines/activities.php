<body>
    <button class="return_btn" onclick='window.history.back();'>
        < </button>
            <h1>Select an activity to start</h1>
            <div class="cards-wrapper" />
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<div class='activity' id='" . ucfirst($row["id"]) . "'>";
                echo "<h2>" . ucfirst($row["name"]) . "</h2><br>";
                echo "<h3>" . ucfirst($row["short_description"]) . "</h3><br><br>";
                echo "<p>Explanation: <span>" . ucfirst($row["detailed_explanation"]) . "</span></p><br>";
                echo '<div class="activity-details">';
                echo '<p class="activity-tag">' . ucfirst($row["schedule"]) . "</p>";
                echo '<p class="activity-tag">' . ucfirst($row["goal"]) . "</p>";
                echo '<p class="activity-tag">' . ucfirst($row["category"]) . "</p>";
                echo '</div>';
                echo "</div>";
            }
            ?>

</body>