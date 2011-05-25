<div class="field">

    <label for="google_analytics_tracking_code">Google Analytics Tracking Code</label>

    <div class="inputs">

        <?php echo __v()->formTextarea('google_analytics_tracking_code', get_option('google_analytics_tracking_code'), array(
            'rows' => 16,
            'style' => 'font-family:"Courier"; font-size: 1.3em;')); 
        ?>

        <p class="explanation">To get the tracking code for your site:</p>
        <ul class="explanation" style="list-style: circle; padding-left: 2.4em;">
            <li>From the Google Analytics "Overview" screen, select the account for the site.</li>
            <li>Click the "Edit" link in the rightmost column of the "Website Profiles" table.</li>
            <li>Click the "Check Status" link at the top right of the "Main Website Profile Information" box.</li>
            <li>Copy and paste the code into the box above.</li>
        </ul>
    </div>

</div>
