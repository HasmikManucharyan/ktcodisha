<?php include('mysql.php');
$ab=$_REQUEST['msg'];
echo $ab;
$url = 'odds_MLB.xml';
$xml = simplexml_load_file($url);

$a="team-sport-content";
$b="league-content";
$c="start-date";
$d="home-team-content";
$e="away-team-content";
$f="point-spread";
$g="home-handicap";
$h="home-odds";
$i="away-odds";
$j="money-line";
$k="over-under";
$l="under-odds";
$m="home-rotation-number";
$o="away-rotation-number";
$n="over-odds";
?>
<form  action="testxml_action.php" method="post" >
<table width="200" border="1">
  <tr>
  
    <td bgcolor="#999999">Sports ID:</td>
    <td bgcolor="#999999">Sports Name:</td>
    <td bgcolor="#999999">League ID:</td>
    <td bgcolor="#999999">League Name:</td>
  </tr>
  <tr>
    <td><?php $lina=$xml->$a->sport->id;
	echo $lina;
	?><input type="hidden" name="lina" value="<?php echo $lina;?>" /></td>
    <td><?php $lina1=$xml->$a->sport->name;
	echo $lina1;?>
      <input type="hidden" name="lina1" value="<?php echo $lina1;?>" /></td>
    <td><?php $lina2=$xml->$a->$b->league->id; echo $lina2;
	 // $str =$lina2;
preg_match('/(?P<digit>\d+)/', $lina2,$matches);
   $league_id=$matches[0];
 ?>
      <input type="hidden" name="lina2" value="<?php echo $league_id;?>" /></td>
    <td><?php  $lina3=$xml->$a->$b->league->name;
	echo $lina3;
 ?>
      <input type="hidden" name="lina3" value="<?php echo $lina3;?>" /></td>
  </tr>
 </table>

 <h3>League Content Details</h3>
 <?php 
$ll=$xml->$a->$b->competition;
 $result = count($ll);
for ($p=0; $p<$result;$p++)
  {
	 $test=$xml->$a->$b->competition[$p]->id;
	 preg_match('/(?P<digit>\d+)/', $test,$matches);
	
     $competition=$matches[0];
?>
 <table border="1">
 	<tr>
        <td colspan="3"><strong>Competition Details:</strong></td>
        <td colspan="2"><strong>Home Team Content:</strong></td>
        <td colspan="2"><strong>Away Team Content:</strong></td>
        <td rowspan="2" width="5%"><strong>Home-Rotation-Number:</strong></td>
        <td rowspan="2" width="5%"><strong>Away-Rotation-Number:</strong></td>
        <td rowspan="2"><strong>Select</strong></td>
    </tr>
 	<tr>
 	  <td width="10%">Competition ID</td>
 	  <td>Start Date:</td>
 	  <td>Name</td>
 	  <td>Team ID:</td>
 	  <td>Team Name:</td>
 	  <td>Team ID:</td>
 	  <td>Team Name</td>
    </tr>
    <tr>
 	  <td><?php $lina4=$xml->$a->$b->competition[$p]->id;
	echo $lina4;?></td>
 	  <td><?php $lina5=$xml->$a->$b->competition[$p]->$c;
	echo $lina5;?></td>
 	  <td><?php $lina6=$xml->$a->$b->competition[$p]->name;
	echo $lina6;?></td>
 	  <td><?php $lina7=$xml->$a->$b->competition[$p]->$d->team->id;
	echo $lina7;
	preg_match('/(?P<digit>\d+)/', $lina7,$matches);
     $h_team=$matches[0];?></td>
 	  <td><?php $lina8=$xml->$a->$b->competition[$p]->$d->team->name;
	echo $lina8;?></td>
 	  <td><?php $lina9=$xml->$a->$b->competition[$p]->$e->team->id;
	echo $lina9;
	preg_match('/(?P<digit>\d+)/', $lina9,$matches);
    $a_team=$matches[0];?></td>
 	  <td><?php $lina10=$xml->$a->$b->competition[$p]->$e->team->name;
	echo $lina10;?></td>
      <td><?php $lina25=$xml->$a->$b->competition[$p]->betting->$m;
	echo $lina25;
	preg_match('/(?P<digit>\d+)/', $lina25,$matches);
    $home_rotation_no=$matches[0];?></td>
      <td><?php $lina26=$xml->$a->$b->competition[$p]->betting->$o;
	echo $lina26;
	preg_match('/(?P<digit>\d+)/', $lina26,$matches);
    $away_rotation_no=$matches[0];?></td>
      <td><input name="comp[]" type="checkbox" value="<?php echo $competition .','. $lina5 .','. $lina6 .',' . $h_team.','. $lina8.','. $a_team .','.$lina10.','.$home_rotation_no.','.$away_rotation_no; ?>" /></td>
    </tr>    
 </table>
 <h3>Betting Details:</h3>
 <h4>Point-Spread Details:</h4>
 <table border="1">
 	<tr>
    	<td>ID:</td>
        <td>Sportsbook:</td>
        <td>Home-Handicap:</td>
        <td>Home-odds:</td>
        <td>Away-odds:</td>
        <td>Select</td>
    </tr>
    <?php 
$aa=$xml->$a->$b->competition[$p]->betting->$f;

$result1 = count($aa);
for ($q=0; $q<$result1;$q++)
  {
?>
    <tr>
    	<td><?php $lina11=$aa[$q]->id;
	echo $lina11;
	preg_match('/(?P<digit>\d+)/', $lina11,$matches);
    $p_spread_id=$matches[0];
	$r_id=$p;
	?></td>
        <td><?php $lina12=$aa[$q]->sportsbook;
	echo $lina12;?></td>
        <td><?php $lina13=$aa[$q]->$g;
	echo $lina13;?></td>
        <td><?php $lina14=$aa[$q]->$h->american;
	echo $lina14;?></td>
        <td><?php $lina15=$aa[$q]->$i->american;
	echo $lina15;?></td>
        <td><strong>
          <input name="point[]" type="checkbox" value="<?php echo $competition .','.$r_id.','.$p_spread_id.','.$lina12.','.$lina13.','.$lina14.','.$lina15.','.$home_rotation_no.','.$away_rotation_no; ?>" 
       /></strong></td>
    </tr>
    <?php }?> <!--loop ends point-spread-->
 </table>
 <h4>Money-Line Details:</h4>
 <table border="1">
 	<tr>
   	  <td>ID</td>
        <td>Sportsbook</td>
        <td>Home-odds:</td>
        <td>Away-odds:</td>
        <td>Select</td>
    </tr>
    <?php 
$bb=$xml->$a->$b->competition[$p]->betting->$j;
$result2 = count($bb);
for ($r=0; $r<$result2;$r++)
  {
?>
    <tr>
   	  <td><?php $lina16=$bb[$r]->id;
	echo $lina16;
	preg_match('/(?P<digit>\d+)/', $lina16,$matches);
    $m_line_id=$matches[0];
	?></td>
        <td><?php $lina17=$bb[$r]->sportsbook;
	echo $lina17;?></td>
        <td><?php $lina18=$bb[$r]->$h->american;
	echo $lina18;?></td>
        <td><?php $lina19=$bb[$r]->$i->american;
	echo $lina19;?></td>
        <td><strong>
          <input name="mony[]" type="checkbox" value="<?php echo $competition .','. $r_id.','.$m_line_id.','.$lina17.','.$lina18.','.$lina19.','.$home_rotation_no.','.$away_rotation_no; ?>" />
        </strong></td>
    </tr>
    <?php }?> <!--loop ends Money-Line-->
 </table>
 <h4>Over-Under Details:</h4>
 <table border="1" style="margin-bottom:10px;">
 	<tr>
   	  <td>ID:</td>
        <td>Sportsbook:</td>
        <td>Total:</td>
        <td>Over-odds::</td>
        <td>Under-odds:</td>
        <td>Select</td>
    </tr>
    <?php 
$cc=$xml->$a->$b->competition[$p]->betting->$k;
$result3 = count($cc);
for ($s=0; $s<$result3;$s++)
  {
?>
	<tr>
   	  <td><?php $lina20=$cc[$s]->id;
	echo $lina20;
	preg_match('/(?P<digit>\d+)/', $lina20,$matches);
    $over_under=$matches[0];
	?></td>
        <td><?php $lina21=$cc[$s]->sportsbook;
	echo $lina21;?></td>
        <td><?php $lina22=$cc[$s]->total;
	echo $lina22;?></td>
        <td><?php $lina23=$cc[$s]->$n->american;
	echo $lina23;?></td>
        <td><?php $lina24=$cc[$s]->$l->american;
	echo $lina24;?></td>
        <td><input name="over[]" type="checkbox" value="<?php echo $competition .','.$r_id.','.$over_under.','.$lina21.','.$lina22.','.$lina23.','.$lina24.','.$home_rotation_no.','.$away_rotation_no; ?>" /></td>
    </tr>

<?php }?> <!--loop ends Over-Under-->
 </table>
  <?php } ?> 
   <input type="submit" name="submit" value="add"/>
</form>
