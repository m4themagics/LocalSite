<?php
$connect = mysqli_connect('localhost', 'root', '', 'MySite');

if(isset($_POST['upload'])) {

$articlename = $_POST['articlename'];
$articleannotation = $_POST['articleannotation'];
$articletextblock = $_POST['articletextblock'];
$articletagsplace = $_POST['articletagsplace'];
$articletagstime = $_POST['articletagstime'];

$file_name=$_FILES['profilepic'];

$img_loc= $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
$image_des = "".$img_name;
move_uploaded_file($img_loc,'images/'.$img_name);

mysqli_query($connect,"INSERT INTO `Items`(`aname`, `aannotation`, `atext`, `apic`, `tag1`, `tag2`) VALUES ('$articlename','$articleannotation','$articletextblock','$image_des','$articletagsplace','$articletagstime')");

header('Location: /');
}
?>