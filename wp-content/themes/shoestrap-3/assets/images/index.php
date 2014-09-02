<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/featuredcontentglider.css" />

	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/featuredcontentglider.js">

	/***********************************************
	* Featured Content Glider script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
	* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
	* This notice must stay intact for legal use
	***********************************************/
	
	</script>
<jdoc:include type="head" />

<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />-->
<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/style.css" type="text/css" />
<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/<?php echo $this->params->get('colorVariation'); ?>.css" type="text/css" />-->
<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/<?php echo $this->params->get('backgroundVariation'); ?>_bg.css" type="text/css" />-->
<?php if($this->direction == 'rtl') : ?>
	<link href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>

<script type="text/javascript">
var min=8;
var max=18;
var s=0;
function increaseFontSize(kkk) {
   var p = document.getElementsByTagName('body');
   for(i=0;i<p.length;i++) {
      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
         var s = 12;
      }
      if(s!=max) {
         s += 1;
      }
      p[i].style.fontSize = s+"px"
   }
}
function decreaseFontSize() {
   var p = document.getElementsByTagName('body');
   for(i=0;i<p.length;i++) {
      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
         var s = 12;
      }
      if(s!=min) {
         s -= 1;
      }
      p[i].style.fontSize = s+"px"
   }   
}

</script>
</head>

<body class="all" style="font-size:13px">



		<div class="header">
        		<div class="logo"><a href="index.php"></a></div>
                <div class="upperBtns1">
                	<jdoc:include type="modules" name="user1" />	
<!--                	<a href="#">Select Language <img src="images/downArrow.gif" alt="" /></a>-->
                </div>
                <div class="upperBtns"><?php echo date('F d, Y'); ?></div>
                
                
                <div class="rightInfo" id="rightInfo">171 West 79th Street <br />
									   New York, New York 10024<br />
									   Phone: (212) 362-9635 <br />      
									   Fax: (212) 362-3997
                </div>
                
        
        
        
		</div>

		<div class="clear"></div>
		<div class="mainWrapper">
        	
        	<ul class="mainNav">
        		<ul class="menu">
<!--        		<jdoc:include type="modules" name="top" />	-->
        		<?php
        			$db =& JFactory::getDBO();
					$db->setQuery("SELECT * FROM `#__menu` WHERE `menutype`='mainmenu' AND `published`='1' AND `parent`='0' ORDER BY ordering");
					$menus = $db->loadObjectList();
					
					foreach ($menus as $m){ ?>
						<li>
							<a href="<?php echo JRoute::_($m->link.'&Itemid='.$m->id); ?>"><span><?php echo $m->name; ?></span></a>
							<?php if($m->id=='2'){ ?>
							<ul>
								<li style="background:url('/~ovidiu/SmallMedical/images/dropdown1.png') repeat scroll 0 0 transparent;
display:block;
height:39px;
margin-top:-9px;
width:241px;">qwe</li>
								<li style="background:url('images/dropdown2.png')">wqewqeq</li>
							</ul>
							<?php } ?>
						</li>
				<?php	}
        		?>
        		</ul>
        	</ul>

        	<div class="searchBox">
        		<jdoc:include type="modules" name="user2" />
            </div>

        
        	<div class="clear"></div>
            
            
        
        	<div class="content" id="content">
        	<?php if(isset($_GET["Itemid"]) && ($_GET["Itemid"]=="28" || $_GET["Itemid"]=="1")){ ?>
            	<script type="text/javascript">

featuredcontentglider.init({
	gliderid: "canadaprovinces", //ID of main glider container
	contentclass: "glidecontent", //Shared CSS class name of each glider content
	togglerid: "p-select", //ID of toggler container
	remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
	selected: 0, //Default selected content index (0=1st)
	persiststate: false, //Remember last content shown within browser session (true/false)?
	speed: 500, //Glide animation duration (in milliseconds)
	direction: "rightleft", //set direction of glide: "updown", "downup", "leftright", or "rightleft"
	autorotate: true, //Auto rotate contents (true/false)?
	autorotateconfig: [3000, 2] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
})

</script>

<div id="canadaprovinces" class="glidecontentwrapper">

<div class="glidecontent" style="height:120px;">
	<div class="sliderText">
		<p class="sliderInfo">Psychiatrist Dr. Robert McMullen, MD provides Transcranial Magnetic Stimulation Therapy (TMS) as an alternative treatment for depression at his private practice located in the West Side of New York City.   TMS Therapy uses short pulses of magnetic fields to stimulate nerve cells in the area of the brain thought to control mood.</p>
	    <div class="clear"></div>
	</div>
</div>

<div class="glidecontent" style="height:120px;">
	<div class="sliderText">
		<p class="sliderInfo">Medication may cause unwanted side-effects such as sexual dysfunction, dizziness, dry mouth, headache, insomnia or sleepiness, weight gain or loss, nausea, and nervousness.  Additionally, medication, along with other treatments such as psychotherapy, may not be particularly effective or achieve satisfactory results in certain patients.</p>
	    <div class="clear"></div>
	</div>
</div>

<div class="glidecontent" style="height:120px;">
	<div class="sliderText">
		<p class="sliderInfo">TMS Therapy is advantageous as it is a safe, non-invasive treatment for depression that uses highly focused, pulsed magnetic fields to stimulate function in targeted brain regions.  Furthermore, it does not require the use of any form of medication. The procedure does not require anesthesia or sedation, and the patient remains awake and alert during the entire treatment.</p>
	    <div class="clear"></div>
	</div>
</div>

<div class="glidecontent" style="height:120px;">
	<div class="sliderText">
		<p class="sliderInfo">In clinical trials, TMS Therapy caused very few side effects and was generally well tolerated by patients. The most common side effect reported during clinical trials was scalp pain or discomfort - generally mild to moderate and occurring less frequently after the first week of treatment. Less than 5% of patients discontinued TMS Therapy due to adverse events.</p>
	    <div class="clear"></div>
	</div>
</div>

</div>

<div id="p-select" class="glidecontenttoggler">
	<a href="#" class="toc"></a> 
    <a href="#" class="toc"></a>
    <a href="#" class="toc"></a>
    <a href="#" class="toc"></a>
</div>
		<?php } ?>     
            <div>
           		<jdoc:include type="component" />
                <div class="clear"></div>
                <br />
         	</div>
                
                <div class="clear"></div>
                <br />
                <img src="images/sep2.gif" alt="" />
                
                <div class="Cbox1">
                	<div class="balloon3">FAQ</div>
                                    
                </div>
                
                <div class="Cbox2">
                	<div class="balloon4">News &amp; Research</div>
                </div>
                
                <div class="clear"></div>
                
<!--                <img src="images/sep2.gif" alt="" />-->
                 
                <div class="Cbox1" id="Cbox1">
                	<ul class="list2">
                    	<li><a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=22&idx=1&Itemid=2'); ?>">>> What is NeuroStar TMS Therapy&reg;?</a></li>
                        <li><a class="" href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=22&idx=2&Itemid=2'); ?>">>> How does NeuroStar TMS Therapy&reg; work? </a></li>
                        <li><a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=22&idx=3&Itemid=2'); ?>">>> Is NeuroStar TMS Therapy&reg; a good alternative for patients who cannot tolerate the side effects associated with antidepressant medications? </a></li>
                        <li><a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=22&idx=4&Itemid=2'); ?>">>> Is NeuroStar TMS Therapy&reg; like other alternative therapies that use magnets to treat some illnesses? </a></li>
                        <li><a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=22&idx=5&Itemid=2'); ?>">>> Is NeuroStar TMS Therapy&reg; like electroconvulsive therapy (ECT)? </a></li>
                        <li><a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=22&idx=6&Itemid=2'); ?>">>> What is a typical course of treatment with NeuroStar TMS Therapy&reg;? </a></li>
                    </ul>
                
                </div>
                
                <div class="Cbox2" id="Cbox2">
                
                	<ul class="list2">
                	<?php
                	    $db =& JFactory::getDBO();
                		$db->setQuery("SELECT * FROM #__weblinks WHERE catid = 19 AND published = 1 AND archived = 0 ORDER BY `id` DESC LIMIT 6");
                		$links = $db->loadObjectList();
                		foreach ($links as $l){
                	?>
                    	<li><a href="<?php echo $l->url;?>" target="_blank">>> <?php echo $l->title;?> </a></li>
                    <?php } ?>   
                    </ul>
                
                
                </div>
                
                
                
                
            </div>
            
            
            
            <div class="sidebar" id="sidebar">
            	
            	<div class="fsize">
                	&nbsp;<a onclick="document.getElementById('content').style.fontSize = '13px';document.getElementById('Cbox1').style.fontSize = '13px';document.getElementById('Cbox2').style.fontSize = '13px';document.getElementById('sidebar').style.fontSize = '13px';document.getElementById('footer_content').style.fontSize = '12px';document.getElementById('copy').style.fontSize = '11px';document.getElementById('fpage_content').style.fontSize = '13px';document.getElementById('notes').style.fontSize = '9px';" style="cursor:pointer;mouse:hand"><img src="images/a1.gif" alt="" /></a>
                    <a onclick="document.getElementById('content').style.fontSize = '15px';document.getElementById('Cbox1').style.fontSize = '15px';document.getElementById('Cbox2').style.fontSize = '15px';document.getElementById('sidebar').style.fontSize = '15px';document.getElementById('footer_content').style.fontSize = '14px';document.getElementById('copy').style.fontSize = '13px';document.getElementById('fpage_content').style.fontSize = '15px';document.getElementById('notes').style.fontSize = '11px';" style="cursor:pointer;mouse:hand"><img src="images/a2.gif" alt="" /></a>
                    <a onclick="document.getElementById('content').style.fontSize = '16px';document.getElementById('Cbox1').style.fontSize = '16px';document.getElementById('Cbox2').style.fontSize = '16px';document.getElementById('sidebar').style.fontSize = '16px';document.getElementById('footer_content').style.fontSize = '15px';document.getElementById('copy').style.fontSize = '14px';document.getElementById('fpage_content').style.fontSize = '16px';document.getElementById('notes').style.fontSize = '12px';" style="cursor:pointer;mouse:hand"><img src="images/a3.gif" alt="" /></a>
                </div>
                
                
                
                <jdoc:include type="modules" name="advert2" />
                
                
                <img src="images/sidebarSep.gif" alt="" />
                <jdoc:include type="modules" name="right" />
                
                
                
            
            </div>

			<div class="clear"></div>
            
            <div class="footer">
            
            	<ul class="footerNav">
                	<jdoc:include type="modules" name="user3" />
                </ul>
            <br /><br /><br /><br />
            <center class="footer_content" id="footer_content">171 West 79th Street New York, New York 10024<br />
Phone: (212) 362-9635 Fax: (212) 362-3997</center>
            
            
            <p class="copy" id="copy">Copyright © 2010 West Side TMS Center of New York City - Robert D. McMullen, MD. All rights reserved.</p>
            
            </div>
        

        </div>



<!--

<script type="text/javascript"> Cufon.now(); </script>

-->

</body>

</html>