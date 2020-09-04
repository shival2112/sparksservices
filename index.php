<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/meta.php'); ?>
    <?php include('include/title.php'); ?>
    <?php include('include/link.php'); ?>
    <?php include('include/config.php'); ?>
    <?php include('include/script.php'); ?>
    <?php 
    if(isset($_REQUEST['file']))
    {
       $filename = $_REQUEST['file'];
    }
    else if($_SERVER['QUERY_STRING']=="")
    {
      header("location:index.php?file=login");
      exit();
    }
    else
    {
       header("location:index.php?file=login");
       exit();
    }
    
    if(!file_exists(getcwd()."/middle/".$_REQUEST['file'].".php"))
    {
      header("location:index.php?file=404");
        exit();
    
    }
    ?> 
</head>
<body>

<!--############################################ login #########################################-->
<?php
if($filename=='login')
{
include_once("middle/".$filename.".php"); 
}
?>
<!--############################################# end of login ######################################-->

<!-- #############################################register ##########################################-->
<?php
if($filename=='register')
{
include_once("middle/".$filename.".php"); 
}
?>
<!-- ##########################################end of register ######################################-->

<!-- Page Wrapper -->
<?php
if($filename!='login' && $filename!='register' )
{?>
<div id="main-wrapper"> 

          <!-- nav bar -->
          <?php
          if($filename!='login' && $filename!='register' ) 
          {
          include('include/navbar.php'); 
          }
          ?>
          <!-- End of nav bar -->

          <!-- side bar -->
          <?php
          if($filename!='login' && $filename!='register' )
          {
          include('include/sidebar.php'); 
          }
          ?>
          <!-- End of side bar -->
                
                <div class="page-wrapper">


                        <div class="container-fluid">
                       <?php include_once("middle/".$filename.".php"); ?>
                       </div>

                </div>
            
</div>
<?php }
if($filename!='login' && $filename!='register' )
{
include('include/footer.php'); } ?>
</body>
</html>
<?php ob_flush();?>