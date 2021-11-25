<?php 
                     include ("dbcon.php");
                        $deletequery = "DELETE FROM blogs WHERE blogid= $_GET[blog]";
                        $iquery = mysqli_query($con,$deletequery);

                        if($iquery) {
                            ?>
                            <script>
                            alert( "Blog Removed" ) ;
                            location.replace("../../my_blogs.php");
                            </script>
                            
                            <?php
                            }else{	
                            ?>
                            <script>
                            alert( "Something Went wrong" ) ;
                            </script>
                            <?php
                            }
                        
 ?>