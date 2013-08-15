<?php
  function is_currentTopNav($sel_page, $cur_page) {
    return ($sel_page == $cur_page) ? 'current' : '';
  }
?>

<div class="topNavWrapper">
  <ul id="topNav">
    <li class="first_Level"><a href="<?php echo $dir ?>prospective_students/index.html" id="prospectiveStudents" class="<?php echo is_currentTopNav($selected, "prospectiveStudents"); ?>">Prospective Students</a>
      <ul onmouseover="document.getElementById('prospectiveStudents').className='current'" onmouseout="document.getElementById('prospectiveStudents').className='<?php echo is_currentTopNav($selected, "prospectiveStudents"); ?>'">
        <li class="second_Level"><a href="<?php echo $dir ?>prospective_students/index.html">Why Stanford</a>
          <ul>
            <li><a href="#">Slideshow</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/majors_minors.html">Majors and Minors</a></li>
          </ul>
        </li>
        <li class="second_Level"><a href="<?php echo $dir ?>prospective_students/ug_admissions.html">Undergraduate Students</a>
          <ul>
            <li><a href="<?php echo $dir ?>prospective_students/ug_admissions.html" target="_blank" >Applying</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/bs_degrees.html" target="_blank">Bachelors Degrees</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/ug_finaid.html" target="_blank">Financial Support</a></li>
          </ul>
        </li>
        <li class="second_Level"><a href="<?php echo $dir ?>prospective_students/grad_overview.html">Graduate Students</a>
          <ul>
            <li><a href="<?php echo $dir ?>prospective_students/grad_admissions.html" target="_blank"> Applying</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/grad_phd.html" target="_blank"> Doctor of Philosophy</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/grad_finaid.html" target="_blank">Financial Support</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/ug_declaring.html?id=1" target="_blank">Ready To Declare?</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/grad_masters.html?id=1" target="_blank">Masters Of Science</a></li>
          </ul>
        </li>
        <li class="second_Level"><a href="<?php echo $dir ?>prospective_students/me_careers.html">Careers in ME</a></li>
      </ul>
    </li>
    <li class="first_Level"><a href="<?php echo $dir ?>current_students/ss_announce.html" id="currentStudents" class="<?php echo is_currentTopNav($selected, "currentStudents"); ?>">Current Students</a>
      <ul onmouseover="document.getElementById('currentStudents').className='current'" onmouseout="document.getElementById('currentStudents').className='<?php echo is_currentTopNav($selected, "currentStudents"); ?>'">
        <li class="second_Level"><a href="#">Undergraduate Students</a>
          <ul>
            <li><a href="<?php echo $dir ?>current_students/ug_advisor.html">Advisor Assignments</a></li>
            <li><a href="<?php echo $dir ?>current_students/ug_declaring.html?id=1" target="_blank">Ready To Declare?</a></li>
            <li><a href="<?php echo $dir ?>current_students/graduation.html">Graduation</a></li>
            <li><a href="<?php echo $dir ?>current_students/ug_program_sheet.html">Program Sheet / Petitions</a></li>
            <li><a href="<?php echo $dir ?>current_students/ug_research.html">Research Opportunities</a></li>
          </ul>
        </li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/co-term.html">Co-Term Students</a></li>
        <li class="second_Level"><a href="#">Masters Students</a>
          <ul>
            <li ><a href="<?php echo $dir ?>current_students/grad_advisor.html" target="_blank">Advisor Assignments</a></li>
            <li><a href="<?php echo $dir ?>current_students/graduation.html" target="_blank">Graduation</a></li>
            <li><a href="<?php echo $dir ?>current_students/grad_handbook.html" target="_blank">Graduate Handbook</a></li>
            <li><a href="<?php echo $dir ?>current_students/ms-to-phd.html" target="_blank" >Transitioning to Ph.D.</a></li>
          </ul>
        </li>
        <li class="second_Level"><a href="#">Ph.D. Students</a>
          <ul>
            <li><a href="<?php echo $dir ?>current_students/grad_handbook.html">Graduate Handbook</a>
            <li><a href="<?php echo $dir ?>current_students/graduation.html">Graduation</a>
            <li><a href="<?php echo $dir ?>current_students/degree_prog.html">Ph.D. Degree Progress</a>
          </ul>
        </li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/grad_fin_supp.html" target="_blank">Financial Support</a></li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/summer.html">Summer Quarter</a></li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/student_orgs.html">Student Organizations</a></li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/student_svcs.html">Student Services Office</a></li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/ss_announce.html">What's New</a></li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/forms.html" >Forms</a></li>
        <li class="second_Level"><a href="<?php echo $dir ?>current_students/lab_safety.html">Lab Safety</a></li>
      </ul>
    </li>
     <li class="first_Level"><a href="<?php echo $dir ?>current_students/ug_declaring.html" id="currentStudents" class="<?php echo is_currentTopNav($selected, "currentStudents"); ?>">Declare ME</a></li>
   
      <li class="first_Level"><a href="<?php echo $dir ?>companies/index.html" id="companies" class="<?php echo is_currentTopNav($selected, "companies"); ?>">Companies</a>
    </li>
    
    
    <li class="first_Level"><a href="#" id="alumni" class="<?php echo is_currentTopNav($selected, "alumni"); ?>">Alumni</a>
      <ul onmouseover="document.getElementById('alumni').className='current'" onmouseout="document.getElementById('alumni').className='<?php echo is_currentTopNav($selected, "alumni"); ?>'">
        <li class="second_Level"><a href="<?php echo $dir ?>alumni/alumni_events.html">Events &amp; Development</a>
        </li>
        <li class="second_Level"><a href="<?php echo $dir ?>alumni/alumni_resources.html">Keeping In Touch</a>
        </li>
        </ul>
    </li>
  
  
    <li class="first_LevelLast"><a href="<?php echo $dir ?>faculty/index.html" id="faculty" class="<?php echo is_currentTopNav($selected, "faculty"); ?>">Faculty</a>
    </li>
  </ul>
  <br style="clear: left;" />
</div>
