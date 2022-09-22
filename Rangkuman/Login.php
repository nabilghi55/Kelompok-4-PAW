<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Kelompok 4 PAW</title>
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>


  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <style>
    @font-face {
      font-family: studly;
      src: url('../img/font/Studly\ Regular.ttf') format('truetype');
    }
  </style>
</head>
<?php
if (isset($_POST['login'])) {
  if ($_POST['username'] == "admin" and $_POST['password'] == 12345) {
    header('Location: mypage.php');
    echo '<script type ="text/JavaScript">';
    echo 'alert("SELAMAT DATANGGG Anda Berhasil Masuk")';
    echo '</script>';
  } else {
    echo '<script type ="text/JavaScript">';
    echo 'alert("Akun Tidak Ada")';
    echo '</script>';
  }
}




?>
<body>
<div class=" text-center justify-center bg-white">
    <h1 class="text-4xl font-[studly] text-black">Login</h1>
  </div>

  <section class="h-screen">
    <section class="h-full gradient-form bg-black md:h-screen">
      <div class="container py-12 px-6 h-full">
        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
          <div class="xl:w-10/12">
            <div class="block bg-[#1A1313] shadow-lg rounded-lg">
              <div class="lg:flex lg:flex-wrap g-0">
                <div class="lg:w-6/12 px-4 md:px-0">
                  <div class="md:p-12 md:mx-6">
                    <div class="text-center">
                      <h4 class="text-xl text-white font-semibold mt-1 mb-12 pb-1 font-[studly]">Salaam Dari Kamii Kelompok 4</h4>
                    </div>
                    <form method="post">
                      <p class="mb-4 font-[studly] text-xl text-white">Silahkan Login</p>
                      <div class="mb-4">
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Username" name="username" autocomplete="off" />
                      </div>
                      <div class="mb-4">
                        <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Password" name="password" />
                      </div>
                      <div class="text-center pt-1 mb-12 pb-1">
                        <button type="submit" value="" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" name="login">
                          Login
                        </button>


                      </div>

                      <div class="flex items-center justify-between pb-6">
                      </div>
                    </form>
                  </div>
                </div>
                <div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none" style="
                background: linear-gradient(127.24deg, #0E0B0B 28.41%, rgba(55, 0, 56, 0.66) 87.54%);
              ">
                  <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                    <h4 class="text-xl font-semibold mb-6">Kelompok 4 menuju programmer</h4>
                    <p class="text-sm">
                      Disini kami belajar banyak dan disini kami dibentuk dengan semboyan berani bertanggung jawab,
                      Kelompok 4 Kuat dan tidak cengeng, Kami rajin bukan lalai, bersama kelompok 4 jaya jaya jaya kaya.
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>