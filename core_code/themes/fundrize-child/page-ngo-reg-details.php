<?php /* Template Name: NGO Registration Details */ ?>
<?php get_header(); 
	$specific_page_name =  basename($_SERVER['REQUEST_URI']);
	?>
    <div id="content-wrap" class="wprt-container <?php echo $specific_page_name;?>">
        <div id="site-content" class="site-content clearfix ">
        	<div id="inner-content" class="inner-content-wrap">
			<h1 class="h1_custom_temp">NGO Registration Details</h1>
            <table>
              <caption>NGO Summary</caption>
              <thead>
                <tr>
                  <th scope="col">Account</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Period</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Account">Visa - 3412</td>
                  <td data-label="Due Date">04/01/2016</td>
                  <td data-label="Amount">$1,190</td>
                  <td data-label="Period">03/01/2016 - 03/31/2016</td>
                </tr>
                <tr>
                  <td scope="row" data-label="Account">Visa - 6076</td>
                  <td data-label="Due Date">03/01/2016</td>
                  <td data-label="Amount">$2,443</td>
                  <td data-label="Period">02/01/2016 - 02/29/2016</td>
                </tr>
                <tr>
                  <td scope="row" data-label="Account">Corporate AMEX</td>
                  <td data-label="Due Date">03/01/2016</td>
                  <td data-label="Amount">$1,181</td>
                  <td data-label="Period">02/01/2016 - 02/29/2016</td>
                </tr>
                <tr>
                  <td scope="row" data-label="Acount">Visa - 3412</td>
                  <td data-label="Due Date">02/01/2016</td>
                  <td data-label="Amount">$842</td>
                  <td data-label="Period">01/01/2016 - 01/31/2016</td>
                </tr>
              </tbody>
            </table>
			</div>
        </div><!-- /#site-content -->

        <?php //get_sidebar(); ?>
    </div><!-- /#content-wrap -->
<?php get_footer(); ?>