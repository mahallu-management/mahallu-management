<?php include("adminheader.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
    function validate()
    {
        var flag=true;
        if(document.getElementById("aa").value=="")
        {
            flag=false;
            document.getElementById("a").style.visibility="visible";
        }
        else
        {
            document.getElementById("a").style.visibility="hidden";
        }
        if(document.getElementById("bb").value=="-1")
        {
            flag=false;
            document.getElementById("b").style.visibility="visible";
        }
        else
        {
            document.getElementById("b").style.visibility="hidden";
        }
        if(document.getElementById("cc").value=="")
        {
            flag=false;
            document.getElementById("c").style.visibility="visible";
        }
        else
        {
            document.getElementById("c").style.visibility="hidden";
        }
        if(document.getElementById("dd").value=="")
        {
            flag=false;
            document.getElementById("d").style.visibility="visible";
        }
        else
        {
            document.getElementById("d").style.visibility="hidden";
        }
        
        return flag;
    }
    </script>
</head>

<body>
<form action="" method="post">
<table class="table table-bordered">
  <tr>
    <td>Member Name</td>
    <td><label>
      <input type="text" name="textfield" id="aa" class="form-control"/>
    </label></td>
     <td><div id="a" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>
    <tr>
    <td>Committee</td>
    <td><label>
      <select name="select2" id="bb" class="form-control">
      <option value="-1">Select Committee</option>
           <?php
		   include("connect.php");
	
	$qry1=mysql_query("SELECT * from committee");
	while($row1=mysql_fetch_array($qry1))
	{
	?>
          <option value="<?php echo $row1['cm_id']?>"><?php echo $row1['cm_nm']?></option>
          <?php
		  }
		  ?>
       
      </select>
    </label></td>
     <td><div id="b" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </tr>

  <tr>
    <td>Post</td>
    <td><label>
      <input type="text" name="text" id="cc" class="form-control"/>
    </label></td>
     <td><div id="c" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    
  </tr>
   <tr>
    <td>Status</td>
    <td><label>
      <input type="text" name="texttt" id="dd" class="form-control"/>
    </label></td>
     <td><div id="d" style="visibility: hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    
  </tr>
 
  <tr>
    <td colspan="2"><div align="center">
      <label>
      <input type="submit" name="Submit" value="Submit" onclick="return validate()" class="btn btn-success"/>
      </label>
    </div></td>
    </tr>
</table>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['Submit']))
{
	$name=$_POST['textfield'];
	$post=$_POST['text'];
	
	$status=$_POST['texttt'];
	$committee=$_POST['select2'];
	
	
	$qry=mysql_query("INSERT INTO `committee_member` VALUES(NULL,'$committee','$post','$name','$status')");
	if($qry>0)
	{
		?>
        <script>
		alert("Suceessfully added Committee Member...");
		window.location="adminhome.php";
		</script>
        <?php
	}
	
}

?>
<?php include("footer.php")?>