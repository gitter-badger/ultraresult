<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.js"></script>
<script type="text/javascript" src="../sorttable.js"></script>
<script type="text/javascript" src="../vp-results.js"></script>

<style>

th.num, td.num {
    width: 60px;
}

input.tinput {
    background-color: #99FFCC;
}
div.stage {
    background-color: blue;
}

</style>

<title>VP2 Nufringen @mi 32.7, &Delta; 15.22</title>
</head>

<body>
<h1>VP2 Nufringen @mi 32.7, &Delta; 15.22</h1>

<?php include("../vp_result_describe.php"); ?>

<div>
<form name="vp2_form" id="vp2_form" method="POST" action="../vp-results.php"  accept-charset="utf-8">
<input type="button" name="2" id="loader" value="Laden" /> <input type="submit" id="saver" value="Senden" />
<br>

  <input type="hidden" name="VP" value="2">
  <input type="hidden" name="access" value="save">

<table id="vp2_times" class="sortable" border="1">
  <tr>
    <th class="num">Num</th>
    <th>Name</th>
    <th>In (hh:mm) </th>
    <th class="sorttable_nosort">Set</th>
    <th class="sorttable_nosort">Edit</th>
    <th>Out (hh:mm) </th>
    <th class="sorttable_nosort">Set</th>
    <th class="sorttable_nosort">Edit</th>
  </tr>

<?php include("../vp_starter.php"); ?>

</table>
</form>
</div>

<br>
<hr>

<div id="stage" class="stage">
DEBUG
</div>

<?php include("../vp_result_footer.php"); ?>