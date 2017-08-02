   </div>
            </div>
            <hr>
            <footer><center>
                <p>&copy; <?php echo $page_title?> 2017    <b>|</b> &copy; by MrJava</p><br><p><font color="blue">
~ Pag3r PHP Framework ~</font></p>
            </footer></center>
        </div>
        <!--/.fluid-container-->
        <script src="<?php echo './Designs/' . $page_design; ?>vendors/jquery-1.9.1.min.js"></script>
        <script src="./Plugnis/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo './Designs/' . $page_design; ?>vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo './Designs/' . $page_design; ?>assets/scripts.js"></script>
		<script src="<?php echo './Designs/' . $page_design; ?>vendors/jGrowl/jquery.jgrowl.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>