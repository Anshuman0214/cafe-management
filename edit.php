<?php
include_once('conn.php');
if (isset($_POST['update'])) {
    $result = mysqli_query($con,"UPDATE users SET uname='$uname',passw='$passw' WHERE id=$id");
    header("Location: users.php");
}
else {
    $i = 0;
}

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_assoc($result))
{
	$uname = $res['uname'];
	$passw = $res['passw'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-emrald-100">
    <div class="container m-5 ">
        <div class="text-xl p-5 text-slate-50  mt-5 ">
            <a href="users.php" class="px-5 py-2 m-5 border-2 rounded border-slate-900 bg-red-400">Home</a>
        </div>
        <div class="m-10  p-5 w-auto bg-slate-700 text-slate-50">
        <form action="edit.php" method="post" >
            
            <div class="flex-col py-10">
                <label for="uname" name="uname">Username  </label>
                <input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Enter Username" class="rounded bg-slate-100 text-slate-900 mx-4">
            </div>
            <div class="flex-col py-10">
                <label for="passw" name="passw">Password  </label>
                <input type="text" name="passw" value="<?php echo $passw;?>" placeholder="Enter Password" class="rounded bg-slate-100 text-slate-900 mx-4">
            </div>
            <div class="flex-start justify-around">
            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <input type="submit" name="update" value="Update" class="border m-3 p-3 hover:opacity-75 border-slate-50 rounded">
                <input type="reset" value="Clear" class="border m-3 p-3 hover:opacity-75 border-slate-50 rounded">
                </div>
        </form>
        </div>
    </div>
</body>
</html>
