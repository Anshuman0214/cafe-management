<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-400">
    <div class="container">
        <div class="flex w-full justify-center  ">
            <div class="flex  text-slate-50  rounded p-10 bg-slate-900 mt-[300px]">
                <div>
                    <form action="auth.php" method="post" name="form1" class="flex-col justify-center align-center items-center">
                       <div class="flex justify-center py-5"> <label for="uname" name="uname">Username  </label>
                        <input type="text" name="uname" placeholder="Enter Username" class="rounded bg-slate-100 text-slate-900 mx-4">
                        <br><br><br><br>
                        </div>
                        <div class="flex-col py-5 justify-center">
                        <label for="passw" name="passw">Password  </label>
                        <input type="password" name="passw" placeholder="Enter Password" class="rounded bg-slate-100 text-slate-900 mx-4">
                        <br><br></div>
                        <div class="flex justify-around">
                        <input type="submit" value="Submit" class="border p-3 hover:opacity-75 border-slate-50 rounded">
                        <input type="reset" value="Clear" class="border p-3 hover:opacity-75 border-slate-50 rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>