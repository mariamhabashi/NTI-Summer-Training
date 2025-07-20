<?php 


include("part/header.php");
include("function.php");
// echo "Welcome User ";
// echo "<pre>";
// var_dump($_SESSION);

if (!empty($_GET) && $_GET['action'] == "edit"){

    echo "<pre>";
    var_dump($_SESSION);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $image_added= false;
        if (!empty($_FILES['image']['name']) && $_FILES['image']['error']== 0){
            $folder = "uploads/";
            if (!file_exists($folder)){
                mkdir($folder, 0777, true);
            }
            //remove old image
            $old_image_path = "uploads/" . $_SESSION['xyz']['image'];
            if (!empty($_SESSION['xyz']['image']) && file_exists($old_image_path)) {
                
                unlink($old_image_path);
            }

            // Take The Name Of Image 
            $destionation = $folder . $_FILES['image']['name'];
            // uploads/
            move_uploaded_file($_FILES['image']['tmp_name'], $destionation);

            $image_added = true;
        }
      

        $image = $_FILES['image']['name'];
        $id = $_SESSION['xyz']['id'];
        $username=$_POST['username']; // khaled
        $email = $_POST['email']; // ahmed@gmail.com
        $password = $_POST['password'];
        if ( $image_added ){

            $query = "UPDATE user set  email = '$email', password = '$password', image = '$image' where id = '$id'";
        } else{
            $query = "UPDATE user set   email = '$email', password = '$password' where id = '$id'";
        }
    

        $result= mysqli_query($con, $query);

        $query ="SELECT * FROM user where id = '$id'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result)>0){
            $_SESSION['xyz'] = mysqli_fetch_assoc($result);
          
}

}

 
?>
    <h2 class=text-center>Edit Profile</h2>
    <form method="POST" enctype="multipart/form-data">

    <img src="<?php echo ROOT_IMAGE .  $_SESSION['xyz']['image'] ?>" width="300px"/>
    <input type="file"  name="image"/>
    <input value="<?= $_SESSION['xyz']['username']?>"  type="text" placeholder="username" name="username"/> 
    <input value="<?= $_SESSION['xyz']['email']?>"  type="email" placeholder="email" name="email"/>
    <input value="<?= $_SESSION['xyz']['password']?>"  type="password" placeholder="Password" name="password"/>
    <input type="submit" value="UPDATE DATA"/>

    </form>

<?php
} else if (!empty($_GET) &&  $_GET['action'] == "add"){
echo "add";
} else if (!empty($_GET) &&  $_GET['action']=="delete" ){
    echo "Delete";
} else{
?>

<main>
    <div class="container">
    <div class="text-center">    
    <h1 >User Profile</h1>
    <div class="data">
        <div class="left text-right">
        <img width="200px" src=<?=ROOT . "/Image/No_Image_Available.jpg" ?> />

    </div>
    <div class="right text-left ml-3">
        <h2>Name : <?=  $_SESSION['xyz']['username']  ?> </h2>       
        <h2>Email : <?= $_SESSION['xyz']['email']?></h2> 
    <button class="edit_user"><a href="profile.php?action=edit">Edit Profile</a></button>
    </div>
    </div>
    <div class="clear"></div>

</div>
    </div>
</main>



<?php 
}
include("part/footer.php");
?>