<?php include('header.php'); ?>

                                            <form action="" method="POST">
                                                <table>
                                                        <tr>
                                                            <td>Job Title: </td>
                                                            <td>
                                                            <input class = "input_field" style = "width:400px;height:50px" name="title"  ?></input>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Details: </td>
                                                            <td>
                                                                <input class = "input_field" style = "width:400px;height:200px" name="body"  ?></input>
                                                                <button  class = "btn_update" name="submit" type="submit">POST</button>
                                                            </td>
                                                        </tr>
                                                </table>
                                            </form>

<?php
    if(isset($_POST['submit'])){
        //data from form
        $title = $_POST['title'];
        $details = $_POST['body'];

        $sql = "INSERT INTO job_offer ( `title`, `details`) VALUES ('$title','$details')";
        $res = mysqli_query($con, $sql);
        if($res==TRUE){
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>User Added Successfully.</div>";
            
            //Redirect Page to Manage Admin
           // header("location:".SITEURL.'admin panel.php');
            echo"<script> window.open('admin panel.php','_self')</script>";
    }
    else
    {
        //FAiled to Insert DAta
        //echo "Faile to Insert Data";
        //Create a Session Variable to Display Message
        $_SESSION['add'] = "<div class='error'>Failed to Add .</div>";
        //Redirect Page to Add Admin
        echo"<script> window.open('post_job.php','_self')</script>";
    }
}
?>


                                        
<?php include('footer.php'); ?>