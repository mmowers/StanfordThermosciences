<?php
  function is_currentLeftNav($sel_page, $cur_page) {
    return ($sel_page == $cur_page) ? ' class="current2"' : '';
  }
?>


<div class="leftNavWrapper">
<?php
	switch($selected) {
	case "prospectiveStudents":
	?>
<div id="fromTopLeftNav">

<div class="firstLevelfromTop"><a href="<?php echo $dir ?>prospective_students/index.html" <?php echo is_currentLeftNav($selected, "prospectiveStudents"); ?>>Prospective Students</a></div>
<div class="secondLevel"><a href="<?php echo $dir ?>prospective_students/index.html" <?php echo is_currentLeftNav($subnav, "undergraduateStudents"); ?>>Undergraduate Students</a></div>
<div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/ug_admissions.html" target="_blank" <?php echo is_currentLeftNav($page, "underApplying"); ?>>Applying</a></div>
<div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/bs_degrees.html" target="_blank" <?php echo is_currentLeftNav($page, "underBachelorsDegrees"); ?>>Bachelors Degrees</a></div>
<div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/ug_finaid.html" target="_blank" <?php echo is_currentLeftNav($page, "underFinancialSupport"); ?>>Financial Support</a></div>
<div class="secondLevel"><a href="<?php echo $dir ?>prospective_students/grad_overview.html" <?php echo is_currentLeftNav($subnav, "graduateStudents"); ?>>Graduate Students</a></div>
<div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/grad_admissions.html" target="_blank" <?php echo is_currentLeftNav($page, "gradAdmissions"); ?>>Applying</a></div>
<div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/grad_phd.html" target="_blank" <?php echo is_currentLeftNav($page, "gradPhd"); ?>>Doctor of Philosophy</a></div>
<div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/grad_finaid.html" target="_blank" <?php echo is_currentLeftNav($page, "gradAid"); ?>>Financial Support</a></div>
<div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/grad_masters.html" target="_blank" 
   <?php echo is_currentLeftNav($page, "gradMasters"); ?>>Masters Of Science</a></div>
<div class="secondLevel"><a href="<?php echo $dir ?>prospective_students/me_careers.html" <?php echo is_currentLeftNav($subnav, "careersME"); ?>>Career in ME</a></div>
<?php
	break;
	?>
<?php
	case "currentStudents":
	?>
<div id="fromTopLeftNav">
  <div class="firstLevelfromTop"><a href="<?php echo $dir ?>current_students/ss_announce.html" <?php echo is_currentLeftNav($selected, "currentStudents"); ?>>Current Students</a></div>
  <div class="secondLevel"><a href="#" <?php echo is_currentLeftNav($subnav, "undergraduateStudents"); ?>>Undergraduate Students</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/ug_advisor.html" <?php echo is_currentLeftNav($page, "ug_advisor"); ?>>Advisor Advertisements</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/ug_declaring.html" target="_blank" <?php echo is_currentLeftNav($page, "underDeclare"); ?>>Declaring in ME</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/graduation.html" <?php echo is_currentLeftNav($page, "graduation"); ?>>Graduation</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>/current_students/ug_program_sheet.html" target="_blank" <?php echo is_currentLeftNav($page, "programSheet"); ?>>Program Sheet / Petitions</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/ug_research.html" <?php echo is_currentLeftNav($page, "ug_research"); ?>>Research Opportunities</a></div>
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/co-term.html" target="_blank" <?php echo is_currentLeftNav($subnav, "coterm"); ?>>Co-Term Students</a></div>
  <div class="secondLevel"><a href="#" <?php echo is_currentLeftNav($subnav, "masters"); ?>>Masters Students</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/grad_advisor.html" target="_blank" <?php echo is_currentLeftNav($page, "masters_advisor"); ?>>Advisor Assignments</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/graduation.html" target="_blank" <?php echo is_currentLeftNav($page, "masters_graduation"); ?>>Graduation</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/grad_handbook.html" target="_blank" <?php echo is_currentLeftNav($page, "masters_grad_handbook"); ?>>Graduate Handbook</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/ms-to-phd.html" target="_blank" <?php echo is_currentLeftNav($page, "masters_ms-to-phd"); ?>>Transitioning to Ph.D.</a></div>
 
 
  <div class="secondLevel"><a href="#" <?php echo is_currentLeftNav($subnav, "phd_students"); ?>>Ph.D. Students</a></div>
  
 <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/grad_handbook.html" target="_blank" <?php echo is_currentLeftNav($page, "masters_grad_handbook"); ?>>Graduate Handbook</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/graduation.html" target="_blank" <?php echo is_currentLeftNav($page, "masters_graduation"); ?>>Graduation</a></div>
  <div class="thirdLevel"><a href="<?php echo $dir ?>current_students/degree_prog.html" target="_blank" <?php echo is_currentLeftNav($page, "phd_degree_progress"); ?>>Ph.D. Degree Progress</a></div>
  
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/grad_fin_supp.html" target="_blank"<?php echo is_currentLeftNav($subnav, "current_fin_supp"); ?>>Financial Support</a></div>
  
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/summer.html" <?php echo is_currentLeftNav($subnav, "current_summer"); ?>>Summer Quarter</a></div>
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/student_orgs.html" <?php echo is_currentLeftNav($subnav, "current_student_orgs"); ?>>Student Organizations</a></div>
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/student_svcs.html" target="_blank" <?php echo is_currentLeftNav($page, "current_student_svs"); ?>>Student Services Office</a></div>
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/ss_announce.html" <?php echo is_currentLeftNav($subnav, "current_new"); ?>>What's New</a></div>
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/forms.html" <?php echo is_currentLeftNav($subnav, "current_forms"); ?>>Forms</a></div>
  <div class="secondLevel"><a href="<?php echo $dir ?>current_students/lab_safety.html" <?php echo is_currentLeftNav($subnav, "current_lab_safety"); ?>>Lab Safety</a></div>
  <?php
	break;
	?>
  
  <?php
	case "companies":
	?>
  <div id="fromTopLeftNav">
    <div class="firstLevelfromTop"><a href="<?php echo $dir ?>companies/index.html" <?php echo is_currentLeftNav($selected, "companies"); ?>>Companies</a></div>
  </div>
  <?php
	break;
	?>
<?php
	case "alumni":
	?>
  <div id="fromTopLeftNav">
    <div class="firstLevelfromTop"><a href="#" <?php echo is_currentLeftNav($selected, "alumni"); ?>>Alumni</a></div>
    <div class="secondLevel"><a href="<?php echo $dir ?>alumni/alumni_events.html" <?php echo is_currentLeftNav($subnav, "alumni_events"); ?>>Events &amp; Development</a></div>
    <div class="secondLevel"><a href="<?php echo $dir ?>alumni/alumni_resources.html" <?php echo is_currentLeftNav($subnav, "alumni_resources"); ?>>Keeping In Touch</a></div>
  <?php
	break;
	?>
  <?php
	case "faculty":
	?>
  <div id="fromTopLeftNav">
    <div class="firstLevelfromTop"><a href="<?php echo $dir ?>faculty/index.html" <?php echo is_currentLeftNav($selected, "faculty"); ?>>Faculty</a></div>
  </div>
  <?php
	break;
	}
	?>
  <ul id="leftNav">
    <?php
	if ($selected == "stanfordEngineering"){
	//  Expanded Lef Nav for stanfordEngineering
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="<?php echo $dir ?>about/index.html"  <?php echo is_currentLeftNav($selected, "stanfordEngineering"); ?>>Stanford Engineering</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/index.html" <?php echo is_currentLeftNav($subnav, "imagineTheFuture"); ?>>Imagine the Future</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/deans_office.html" <?php echo is_currentLeftNav($subnav, "deansOffice"); ?>>Dean's Office</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>about/deans_bio.html" <?php echo is_currentLeftNav($page, "deansBio"); ?>>Dean's Bio</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>about/news_leaders.html" <?php echo is_currentLeftNav($page, "meetOurLeaders"); ?>>Meet Our Leaders</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>about/contact_org.html" <?php echo is_currentLeftNav($page, "organizationChart"); ?>>Organization Chart</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/history.html" <?php echo is_currentLeftNav($subnav, "history"); ?>>History</a></div>
      <div class="thirdLevel"><a href="#" <?php echo is_currentLeftNav($page, "timeline"); ?>>Timeline</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>about/archive_history.html" <?php echo is_currentLeftNav($page, "memories"); ?>>Memories</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/facts.html" <?php echo is_currentLeftNav($subnav, "factsAndFigures"); ?>>Facts &amp; Figures</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>about/faculty_honors/2008_2009_faculty_honors.html" <?php echo is_currentLeftNav($page, "facultyHonors"); ?>>Faculty Honors</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>about/emeriti.html" <?php echo is_currentLeftNav($page, "emeritusFaculty"); ?>>Emeritus Faculty</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/facilities.html" <?php echo is_currentLeftNav($subnav, "exploreOurFacilities"); ?>>Explore Our Facilities</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>visit/facitlities_map.html"  <?php echo is_currentLeftNav($page, "findABuilding"); ?>>Find a building</a></div>
      <div class="thirdLevel"><a href="http://ssu.stanford.edu" target="_blank" <?php echo is_currentLeftNav($page, "sustainabilityAtStanford"); ?>>Sustainability at Stanford</a></div>
      <div class="thirdLevel"><a href="http://www-sul.stanford.edu/depts/eng/index.html" target="_blank" <?php echo is_currentLeftNav($page, "engineeringLibrary"); ?>>Engineering Library</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>visit/huang_center/index.html" <?php echo is_currentLeftNav($page, "theHuangEngineeringCenter"); ?>>The Huang Engineering Center</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/newsroom.html" <?php echo is_currentLeftNav($subnav, "newsroom"); ?>>Newsroom</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>about/news_publications.html" <?php echo is_currentLeftNav($page, "schoolPubs"); ?>>School Publications</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/volunteer.html" <?php echo is_currentLeftNav($subnav, "volunteerLeadership"); ?>>Volunteer Leadership</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/jobs.html" <?php echo is_currentLeftNav($subnav, "workingAtStanford"); ?>>Working at Stanford</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>about/spotlight.html" <?php echo is_currentLeftNav($subnav, "spotlightOnEngineering"); ?>>Spotlight on Engineering</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>research/profiles/researchprofiles.html" <?php echo is_currentLeftNav($page, "researchProfiles"); ?>>Research Profiles</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>prospective_students/meet_our_students.html" <?php echo is_currentLeftNav($page, "studentProfiles"); ?>>Student Profiles</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>alumni/alumniprofiles.html" <?php echo is_currentLeftNav($page, "alumniProfiles"); ?>>Alumni Profiles</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "stanfordEngineering") {
	//  Fly Out Lef Nav for stanfordEngineering
	?>
    <li class="firstLevel"><a href="<?php echo $dir ?>about/index.html" id="stanfordEngineering" <?php echo is_currentLeftNav($selected, "stanfordEngineering"); ?>>Stanford Engineering</a>
      <ul onmouseover="document.getElementById('stanfordEngineering').className='current2'" onmouseout="document.getElementById('stanfordEngineering').className=''">
        <li><a href="<?php echo $dir ?>about/index.html">Imagine the Future</a></li>
        <li><a href="about/deans_office.html">Dean's Office</a>
          <ul>
            <li><a href="<?php echo $dir ?>about/deans_bio.html">Dean's Bio</a></li>
            <li><a href="<?php echo $dir ?>about/news_leaders.html">Meet Our Leaders</a></li>
            <li><a href="<?php echo $dir ?>about/contact_org.html">Organization Chart</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $dir ?>about/history.html">History</a>
          <ul>
            <li><a href="#">Timeline</a></li>
            <li><a href="<?php echo $dir ?>about/archive_history.html">Memories</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $dir ?>about/facts.html">Facts &amp; Figures</a>
          <ul>
            <li><a href="<?php echo $dir ?>about/faculty_honors/2008_2009_faculty_honors.html">Faculty Honors</a></li>
            <li><a href="<?php echo $dir ?>about/emeriti.html">Emeritus Faculty</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $dir ?>about/facilities.html">Explore Our Facilities</a>
          <ul>
            <li><a href="<?php echo $dir ?>visit/facitlities_map.html" >Find a Building</a></li>
            <li><a href="http://ssu.stanford.edu" target="_blank" >Sustainability at Stanford</a></li>
            <li><a href="http://www-sul.stanford.edu/depts/eng/index.html" target="_blank">Engineering Library</a></li>
            <li><a href="<?php echo $dir ?>visit/huang_center/index.html">The Huang Engineering Center</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $dir ?>about/newsroom.html">Newsroom</a>
          <ul>
            <li><a href="<?php echo $dir ?>about/news_publications.html">School Publications</a></li>
          </ul>

        </li>
        <li><a href="<?php echo $dir ?>about/volunteer.html">Volunteer Leadership</a></li>
        <li><a href="<?php echo $dir ?>about/jobs.html">Working at Stanford</a></li>
        <li><a href="<?php echo $dir ?>about/spotlight.html">Spotlight on Engineering</a>
          <ul>
            <li><a href="<?php echo $dir ?>research/profiles/researchprofiles.html">Research Profiles</a></li>
            <li><a href="<?php echo $dir ?>prospective_students/meet_our_students.html">Student Profiles</a></li>
            <li><a href="<?php echo $dir ?>alumni/alumniprofiles.html">Alumni Profiles</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected == "facultyAndResearch"){
	//  Expanded Lef Nav for facultyAndResearch
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="<?php echo $dir ?>research/index.html" <?php echo is_currentLeftNav($selected, "facultyAndResearch"); ?>>Faculty &amp; Research</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>research/index.html" <?php echo is_currentLeftNav($subnav, "strategicPriorities"); ?>>Strategic Priorities</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>research/profiles/bioengineering.html" <?php echo is_currentLeftNav($page, "bioengineering"); ?>>Bioengineering</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>research/energy.html" <?php echo is_currentLeftNav($page, "environmentAndEnergy"); ?>>Environment &amp; Energy</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>research/infotech.html" <?php echo is_currentLeftNav($page, "informationTechnology"); ?>>Information Technology</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>research/nano.html" <?php echo is_currentLeftNav($page, "nanoscienceAndNanotechnology"); ?>>Nanoscience &amp; Nanotechnology</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>research/search_faculty.html" <?php echo is_currentLeftNav($subnav, "searchFaculty"); ?>>Search Faculty</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>research/lab_ctr_search.php" <?php echo is_currentLeftNav($subnav, "searchLabsAndCenters"); ?>>Search Labs &amp; Centers</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>research/ate/ask_expert.html" <?php echo is_currentLeftNav($subnav, "askTheExpert"); ?>>Ask the Expert</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>research/profiles/researchprofiles.html"  <?php echo is_currentLeftNav($subnav, "researchProfiles"); ?>>Research Profiles</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "facultyAndResearch") {
	//  Fly Out Lef Nav for facultyAndResearch
	?>
    <li class="firstLevel"><a href="<?php echo $dir ?>research/" id="facultyAndResearch" <?php echo is_currentLeftNav($selected, "facultyAndResearch"); ?>>Faculty &amp; Research</a>
      <ul onmouseover="document.getElementById('facultyAndResearch').className='current2'" onmouseout="document.getElementById('facultyAndResearch').className=''">
        <li><a href="<?php echo $dir ?>research/strategic_priorities.html">Strategic Priorities</a>
          <ul>
            <li><a href="<?php echo $dir ?>research/bioengineering.html">Bioengineering</a></li>
            <li><a href="<?php echo $dir ?>research/energy.html">Environment &amp; Energy</a></li>
            <li><a href="<?php echo $dir ?>research/infotech.html">Information Technology</a></li>
            <li><a href="<?php echo $dir ?>research/nano.html">Nanoscience &amp; Nanotechnology</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $dir ?>research/search_faculty.html">Search Faculty</a></li>
        <li><a href="<?php echo $dir ?>research/lab_ctr_search.php">Search Labs &amp; Centers</a></li>
        <li><a href="<?php echo $dir ?>research/ate/ask_expert.html">Ask the Expert</a></li>
        <li><a href="<?php echo $dir ?>research/profiles/researchprofiles.html">Research Profiles</a></li>
      </ul>

    </li>
    <?php
	}
	?>
    <?php
	if ($selected == "admissions"){
	//  Expanded Lef Nav for admissions
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="<?php echo $dir ?>admissions/index.html"<?php echo is_currentLeftNav($selected, "admissions"); ?>>Admissions</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "admissions"){
	//  Fly Out Lef Nav for admissions
	?>
    <li class="firstLevel"><a href="<?php echo $dir ?>admissions/index.html" id="admissions" <?php echo is_currentLeftNav($selected, "admissions"); ?>>Admissions</a></li>
    <?php
	}
	?>
    <?php
	if ($selected == "departmentsPrograms"){
	//  Expanded Lef Nav for departmentsPrograms
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="<?php echo $dir ?>departments/index.html" <?php echo is_currentLeftNav($selected, "departmentsPrograms"); ?>>Departments &amp; Programs</a></div>
      <div class="secondLevel"><a href="http://aa.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "aeronauticsAndAstronautics"); ?>>Aeronautics &amp; Astronautics</a></div>
      <div class="secondLevel"><a href="http://bioengineering.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "bioengineering"); ?>>Bioengineering</a></div>
      <div class="secondLevel"><a href="http://cheme.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "chemicalEngineering"); ?>>Chemical Engineering</a></div>
      <div class="secondLevel"><a href="http://cee.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "civilAndEnvironmentalEngineering"); ?>>Civil and Environmental Engineering</a></div>
      <div class="secondLevel"><a href="http://cs.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "computerScience"); ?>>Computer Science</a></div>
      <div class="secondLevel"><a href="http://ee.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "electricalEngineering"); ?>>Electrical Engineering</a></div>
      <div class="secondLevel"><a href="http://www.stanford.edu/dept/MSandE/" target="_blank" <?php echo is_currentLeftNav($subnav, "managementScienceAndEngineering"); ?>>Management Science &amp; Engineering</a></div>
      <div class="secondLevel"><a href="http://mse.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "materialsScienceAndEngineering"); ?>>Materials Science &amp;<br/>
        Engineering</a></div>
      <div class="secondLevel"><a href="http://me.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "mechanicalEngineering"); ?>>Mechanical Engineering</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "departmentsPrograms"){
	//  Fly Out Lef Nav for departmentsPrograms
	?>
    <li class="firstLevel"><a href="<?php echo $dir ?>departments/index.html" id="departmentsPrograms" <?php echo is_currentLeftNav($selected, "departmentsPrograms"); ?>>Departments &amp; Programs</a>
      <ul onmouseover="document.getElementById('departmentsPrograms').className='current2'" onmouseout="document.getElementById('departmentsPrograms').className=''">
        <li><a href="http://aa.stanford.edu/" target="_blank">Aeronautics &amp; Astronautics</a></li>
        <li><a href="http://bioengineering.stanford.edu/" target="_blank">Bioengineering</a></li>
        <li><a href="http://cheme.stanford.edu/" target="_blank">Chemical Engineering</a></li>
        <li><a href="http://cee.stanford.edu/" target="_blank">Civil and Environmental Engineering</a></li>
        <li><a href="http://cs.stanford.edu/" target="_blank">Computer Science</a></li>
        <li><a href="http://ee.stanford.edu/" target="_blank">Electrical Engineering</a></li>
        <li><a href="http://www.stanford.edu/dept/MSandE/" target="_blank">Management Science &amp; Engineering</a></li>
        <li><a href="http://mse.stanford.edu/" target="_blank">Materials Science &amp;<br/>
          Engineering</a></li>
        <li><a href="http://me.stanford.edu/" target="_blank">Mechanical Engineering</a></li>
      </ul>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected == "extendedEducation"){
	//  Expanded Lef Nav for extendedEducation
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="<?php echo $dir ?>extended_education/index.html" <?php echo is_currentLeftNav($selected, "extendedEducation"); ?>>Extended Education</a></div>
      <div class="secondLevel"><a href="http://scpd.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "professionalDevelopment"); ?>>Professional Development</a></div>
      <div class="secondLevel"><a href="http://see.stanford.edu/" target="_blank" <?php echo is_currentLeftNav($subnav, "stanfordEngineeringEverywhere"); ?>>Stanford Engineering Everywhere</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "extendedEducation"){
	//  Fly Out Lef Nav for extendedEducation
	?>
    <li class="firstLevel"><a href="<?php echo $dir ?>extended_education/index.html" id="extendedEducation" <?php echo is_currentLeftNav($selected, "extendedEducation"); ?>>Extended Education</a>
      <ul onmouseover="document.getElementById('extendedEducation').className='current2'" onmouseout="document.getElementById('extendedEducation').className=''">
        <li><a href="http://scpd.stanford.edu/" target="_blank">Professional Development</a></li>
        <li><a href="http://see.stanford.edu/" target="_blank">Stanford Engineering Everywhere</a></li>
      </ul>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected == "visitingUs"){
	//  Expanded Lef Nav for visitingUs
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="<?php echo $dir ?>visit/index.html" <?php echo is_currentLeftNav($selected, "visitingUs"); ?>>Visiting Us</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>visit/facitlities_map.html"  <?php echo is_currentLeftNav($subnav, "findAbuilding"); ?>>Find a Building</a></div>
      <div class="secondLevel"><a href="http://www.stanford.edu/dept/visitorinfo/plan/maps.html" <?php echo is_currentLeftNav($subnav, "mapsAndDirections"); ?>>Maps &amp; Directions</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>visit/transportation.html"<?php echo is_currentLeftNav($subnav, "publicTransit"); ?>>Public Transit</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>visit/tours.html" <?php echo is_currentLeftNav($subnav, "tours"); ?>>Tours</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>visit/huang_center/index.html" <?php echo is_currentLeftNav($subnav, "theHuangEngineeringCenter"); ?>>The Huang Engineering Center</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "visitingUs"){
	//  Fly Out Lef Nav for visitingUs
	?>
    <li class="firstLevel"><a href="<?php echo $dir ?>visit/index.html"id="visitingUs" <?php echo is_currentLeftNav($selected, "visitingUs"); ?>>Visiting Us</a>
      <ul onmouseover="document.getElementById('visitingUs').className='current2'" onmouseout="document.getElementById('visitingUs').className=''">
        <li><a href="<?php echo $dir ?>visit/facitlities_map.html">Find a Building</a></li>
        <li><a href="http://www.stanford.edu/dept/visitorinfo/plan/maps.html">Maps &amp; Directions</a></li>
        <li><a href="<?php echo $dir ?>visit/transportation.html">Public Transit</a></li>
        <li><a href="<?php echo $dir ?>visit/tours.html">Tours</a></li>
        <li><a href="<?php echo $dir ?>visit/huang_center/index.html">The Huang Engineering Center</a></li>
      </ul>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected == "givingToEngineering"){
	//  Expanded Lef Nav for givingToEngineering
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="<?php echo $dir ?>giving/index.html" <?php echo is_currentLeftNav($selected, "givingToEngineering"); ?>>Giving to Engineering</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>giving/index.html" <?php echo is_currentLeftNav($subnav, "theStanfordChallenge"); ?>>The Stanford Challenge</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>giving/givingopps.html" <?php echo is_currentLeftNav($subnav, "givingOpportunities"); ?>>Giving Opportunities</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>giving/bestbright.html" <?php echo is_currentLeftNav($page, "people"); ?>>People</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>giving/programs.html" <?php echo is_currentLeftNav($page, "programs"); ?>>Programs</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>giving/building.html" <?php echo is_currentLeftNav($page, "buildings"); ?>>Buildings</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>giving/waystogive.html" <?php echo is_currentLeftNav($subnav, "waysToGive"); ?>>Ways to Give</a></div>
      <div class="thirdLevel"><a href="<?php echo $dir ?>giving/annual.html" <?php echo is_currentLeftNav($page, "annualGiving"); ?>>Annual Giving</a></div>
      <div class="thirdLevel"><a href="#" <?php echo is_currentLeftNav($page, "endowedGifts"); ?>>Endowed Gifts</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>giving/makeagift.html" <?php echo is_currentLeftNav($subnav, "howToMakeAGift"); ?>>How to Make a Gift</a></div>
      <div class="secondLevel"><a href="<?php echo $dir ?>giving/contact.html" <?php echo is_currentLeftNav($subnav, "contactUs"); ?>>Contact Us</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "givingToEngineering"){
	//  Fly Out Lef Nav for givingToEngineering

	?>
    <li class="firstLevel"><a href="<?php echo $dir ?>giving/index.html" id="givingToEngineering" <?php echo is_currentLeftNav($selected, "givingToEngineering"); ?>>Giving to Engineering</a>
      <ul onmouseover="document.getElementById('givingToEngineering').className='current2'" onmouseout="document.getElementById('givingToEngineering').className=''">
        <li><a href="<?php echo $dir ?>giving/index.html">The Stanford Challenge</a></li>
        <li><a href="<?php echo $dir ?>giving/givingopps.html">Giving Opportunities</a>
          <ul>
            <li><a href="<?php echo $dir ?>giving/bestbright.html">People</a></li>
            <li><a href="<?php echo $dir ?>giving/programs.html">Programs</a></li>
            <li><a href="<?php echo $dir ?>giving/building.html">Buildings</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $dir ?>giving/waystogive.html">Ways to Give</a>
          <ul>
            <li><a href="<?php echo $dir ?>giving/annual.html">Annual Giving</a></li>
            <li><a href="#">Endowed Gifts</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $dir ?>giving/makeagift.html">How to Make a Gift</a></li>
        <li><a href="<?php echo $dir ?>giving/contact.html">Contact Us</a></li>
      </ul>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected == "eventsCalendar"){
	//  Expanded Lef Nav for eventsCalendar
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLine"><a href="http://events.stanford.edu/soe/" target="_blank" class="leftMenu" <?php echo is_currentLeftNav($selected, "eventsCalendar"); ?>>Events Calendar</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "eventsCalendar"){
	//  Fly Out Lef Nav for eventsCalendar
	?>
    <li class="firstLevel"><a href="http://events.stanford.edu/soe/" target="_blank" id="eventsCalendar" <?php echo is_currentLeftNav($selected, "eventsCalendar"); ?>>Events Calendar</a></li>
    <?php
	}
	?>
    <?php
	if ($selected == "onlineStore"){
	//  Expanded Lef Nav for onlineStore
	?>
    <li id="fromLeftNav">
      <div class="firstLevelLast"><a href="#" class="leftMenu" <?php echo is_currentLeftNav($selected, "onlineStore"); ?>>Online Store</a></div>
    </li>
    <?php
	}
	?>
    <?php
	if ($selected != "onlineStore"){
	//  Fly Out Lef Nav for onlineStore
	?>
    <li class="firstLevelLast"><a href="#" id="onlineStore" <?php echo is_currentLeftNav($selected, "onlineStore"); ?>>Online Store</a></li>
    <?php
	}
	?>
  </ul>
  <!--div id="donwnloadPDF">
		<a href="#"><img src="images/icon-pdf.gif" alt="Download the Spring &acute;08 Edition of Today in Engineering" id="icon-pdf" align="center" />Download the Spring &acute;08 Edition
		<br />of Today in Engineering</a>
	</div-->
</div>
