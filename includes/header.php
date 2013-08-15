				<div id="header">
				<?php
				if ($selected=='stanford-home') {
				?>
				<?php include("{$dir}includes/date.php");?>
				<?php
				}
				?>
					<div id="searchSection">
					<form action="http://ask.stanford.edu/search" method="GET" id="Search" name="Search" class="header" style="margin: 0; padding: 0; border: none;">

					<input type='hidden' name='client' value='stanford' />
					<input type='hidden' name='proxystylesheet' value='stanford' />
					<input type='hidden' name='output' value='xml_no_dtd' />
					<input type="hidden" name="site" value="engineering" />
<INPUT TYPE="HIDDEN"  name="search_type" value="any" size="50">


						<div id="search"><img src="<?php echo $dir ?>images/btn_search.gif" alt="Search" id="snav" /></div>
						<div id="bgSoE"><input type="text" name="q" id="inputSearch" /><input type="image" src="<?php echo $dir ?>images/arrow_search.gif" alt="&gt;&gt;" id="arrowSearch" /></div>
						<div id="bgPeople"><input type="image" src="<?php echo $dir ?>images/bg_people.gif" alt="People" onClick="Search.inputSearch.name='all'; Search.action='/research/pers_results.php';" /></div>
						<div id="bgLabs"><input type="image" src="<?php echo $dir ?>images/bg_labs.gif" alt="Labs" onClick="Search.inputSearch.name='search'; Search.action='/research/lab_ctr_non_mbr_display.php';" /></div>
						<div id="bgIntranet"><a href=""><img src="<?php echo $dir ?>images/bg_intranet.gif" alt="Intranet"  id="snav" /></a></div>
					</form>
					</div>
				<?php
					if ($selected=='stanford-home') {
				?>
					<div id="headerNavs">
						<div id="slideNavs">
							<img id="btnPrevious" src="<?php echo $dir ?>images/previous.gif" alt="previous" class="slideNav" />
							<img id="btnNext" src="<?php echo $dir ?>images/next.gif" alt="next" class="slideNav" />
							<img id="btnStop" src="<?php echo $dir ?>images/stop.gif" alt="stop" class="slideNav" />
							<img id="btnResume" src="<?php echo $dir ?>images/resume.gif" alt="resume" class="slideNav" style="display:none;" />
						</div>
					</div>
				<?php
				}
				?>

				</div>
