<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

?>

<div class="container">

<table class="responsive">
   <h3 class="title">&#10003; Brinding the world to Agreement &nbsp; &nbsp; &#10003; A world without paperwork  &nbsp; &nbsp; &#10003; Smart Contracts</h3>
     
   <p><br>Examples of codified legal documents that might be useful to describe the benefits provided by CommonAccord to the legal profession, and to the world at large.
<br/><br/>
    <table class="table table-striped table-condensed table-bordered" style="padding:20px">

<tr>
<td><img src="http://iconizer.net/files/Luminight/thumb/128/filter_data.png" height="50px"/></td>
<td width="100px"><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=/GenomicsAndHealth/REWG/Demo/>Data Collection</a></td>
				 <td>Automating Patient Consents, with an international approach:<br>Cmacc's Consent Forms can inherit different clauses according to the language, jurisdiction, situation of the data subject, etc. </td>
</tr>

<tr>
<td><img src="http://www.vermontsales.co.za/images/homepage/privacy_policy_icon.png" height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=./02/Demo/Acme_Privacy_Policy.md>Privacy policy</a></td>
<td>Privacy policies are very complex documents with lots of boilerplate, which makes it difficult for users to understand what rights they are actually renouncing to. Cmacc datamodel allow for the elaboration of Privacy policy that inherit from 'standard policies' making it easier for people to read them by looking at the 'diff' (changes).
</td></tr>
<tr>
<td><img src="http://www.richierichardson.in/wp-content/uploads/2014/11/policies-icon.png" height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=01/Demo>Terms of Use</a></td>
<td>Different terms of use are being constantly writen and rewriten: Cmacc's flexible data model allows to build simple Terms of Use by relying on pre-existing clauses that can be combined and modified as needed.</td></tr>

<tr>
<td><img src="https://d4hm2u4pioc0c.cloudfront.net/icons/png/o/blue_dark_grey/256x256/security_badge.png"height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=doc/escrow/">Escrow system</a></td>
<td>An escrow is necessary to make sure that transactions operate well: <br>
Cmacc allows to dynamically generate escrow contracts between multiple parties, by relying on an extensive template system.</td></tr>

<tr>
<td><img src="http://mirrors.creativecommons.org/presskit/icons/cc.large.png" height="50px"></td>
<td><a href="<?=$_SERVER['PHP_SELF']?>?action=list&file=/CreativeCommons/License/4_0/">Copyright licensees</a></td>
<td>This is the suite of Creative Commons Licences, done as source code. By merely forking and extending previous licenses, we can implement a complex system of conditions, which always remain easy to read for everyone.</td></tr>

	</table>
	</table>
</div>
<style>
	#filelist { 
		display: none;
	}
</style>
