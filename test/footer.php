</div></div>
	
	<div class="horizbar" id="footer"><div class="horizbar2">
		<div class="footerleft">
		<b>ACADEMIC YEAR HOURS:</b> Monday - Friday: 9am - 1pm in Fayerweather 204<br />
		If you are unavailable to visit the VRC during open hours, please contact the curators at the email below to schedule an appointment.<br />
		<br />
		gsappvrc@columbia.edu
		<p>&nbsp;</p>
		</div>
		
		<div class="footerright">
		<?php include('includes/fm-settings-info.php'); ?>
		</div>
	<div style="height: 50px"></div>
	</div></div><!--End of horizbar, primary layout-->
	
	<!--Fading alert section to be activated on clipboard copy button-->
	<div id="fadingAlert"><div class="vcenter25">
	The filepath
	<?php 
	if(isset($projectionFilepath) && $projectionFilepath != "") {
		echo('<br /><span style="color: #68b7e9">'.$projectionFilepath.'</span><br />');
	}
	?>
	has been copied to your clipboard.<br /><br />
	Please copy into your browser window to access.
	</div></div>
	
	<!--Slide panel attach using JS-->
	<script type="text/javascript">
    $(document).ready(function(){
        $('[data-slidepanel]').slidepanel({
            orientation: 'right',
            mode: 'overlay'
        });
    });
	</script>

	</body>
</html>