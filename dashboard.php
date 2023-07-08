<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-teal-100" >
    <div class="container-md">
        <h1 class="text-4xl text-center my-10 ">
           <span class="bg-gradient-to-r font-semibold from-red-500 via-rose-900 to-slate-600 text-transparent bg-clip-text"> Hello Admin</span>
        </h1>

        <div class="md:flex md:w-full  p-5">
            <div class="md:mx-[450px] text-center md:inline-flex w-full justify-around ">
            <div class="m-4 bg-slate-50 p-4 border border-slate-900 rounded">
                   <a href="slider.php" class="">Manage Slider</a>
                </div>
             <div class="m-4 bg-slate-50 p-4 text-center  border border-slate-900 rounded">
                   <a href="edit.php" class="">Manage Menu</a>
            </div>
            <div class="m-4 bg-slate-50 p-4 text-center border border-slate-900 rounded">
                   <a href="users.php" class="">Manage User</a>
            </div>
            <div class="m-4 bg-slate-50 p-4 text-center border border-slate-900 rounded">
                   <a href="pass.php" class="">Change Password</a>
            </div>
            <div class="m-4 bg-slate-50 p-4 text-center border border-slate-900 rounded">
                   <a href="logout.php" class="">Logout</a>
            </div>
            </div>
        </div>

    </div>
    
</body>
</html>