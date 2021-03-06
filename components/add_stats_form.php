<body>
    <h1>Add Cases</h1>
    <form id="add-stats" action=<?php echo($path_to_utils.'insert.php') ?>  method='post'>
        <div id='date'>
            <label for='date'>Date:</label>
            <!-- I could have added a date type, but the specific format dd-mm-YYYY is required -->
            <!-- The following regex is simple and basic, for simplicity purpose -->
            <input required name='date' placeholder="dd-mmmm-YYYY" maxlength="11" pattern="^(0[1-9]|[12][0-9]|3[01])[- -.](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)[- -.](19|20)\d\d$" type='text'/>
        </div>
        <div id='country'>
            <label for='country'>Country:</label>
            <?php renderCountriesSelect()?>
        </div>
        <div id='newCases'>
            <label for='newCases'>Number of new cases:</label>
            <input name='newCases' required min=0 type='number'/>
        </div>
        <div id='newDeaths'>
            <label for='newDeaths'>Number of new deaths:</label>
            <input name='newDeaths' required min=0 type='number'/>
        </div>
        <button type='submit'>OK</button>
    </form>
</body>